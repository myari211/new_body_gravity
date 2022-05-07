<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Ramsey\Uuid\Uuid;
use Validator;
use Str;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function customer() {
        $customer_result = "";

        $total_customer = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('users.id', '=', 'model_has_roles.model_id');
            })
            ->leftJoin('roles', function ($join) {
                $join->on('model_has_roles.role_id', '=', 'roles.id');
            })
            ->where('roles.name', 'customer')
            ->count();

        $customer = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('users.id', '=', 'model_has_roles.model_id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('model_has_roles.role_id', '=', 'roles.id');
            })
            ->select('*', 'users.id as user_id')
            ->where('roles.name', 'customer')
            ->get();

        foreach($customer as $data) {
            $customer_result .= '<div class="col-lg-4">'.
                '<div class="card">'.
                        '<div class="card-body">'.
                            '<div class="row">'.
                                '<div class="col-lg-5">'.
                                    '<img src="'.(asset('image/body_gravity_black.png')).'" class="w-100" class="rounded-circle border">'.
                                '</div>'.
                                '<div class="col-lg-7">'.
                                    '<div class="row">'.
                                        '<div class="col-lg-12 d-flex justify-content-between">'.
                                            '<span style="font-size:18px; font-weight:600; opacity:0.8">'.(Str::limit($data->first_name." ".$data->last_name, 11)).'</span>'.
                                            '<button type="button" class="btn btn-md rounded-0 p-0 z-depth-0 m-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                                                '<i class="fas fa-ellipsis-v"></i>'.
                                            '</button>'.
                                            '<div class="dropdown-menu">'.
                                                '<a class="dropdown-item" href="'.(route('admin.customer.details', $data->user_id)).'" style="font-weight:600">'.
                                                    '<span class="badge front-color text-white p-2 rounded-circle mr-2">'.
                                                        '<i class="fas fa-user"></i>'.
                                                    '</span>'.
                                                    'Profile'.
                                                '</a>'.
                                                '<a class="dropdown-item" href="#" style="font-weight:600">'.
                                                    '<span class="badge badge-warning p-2 rounded-circle mr-2">'.
                                                        '<i class="fas fa-pen"></i>'.
                                                    '</span>'.
                                                    'Edit'.
                                                '</a>'.
                                                '<div class="dropdown-divider"></div>'.
                                                '<a class="dropdown-item" href="#" style="font-weight:600">'.
                                                    '<span class="badge badge-danger p-2 rounded-circle mr-2">'.
                                                        '<i class="fas fa-trash"></i>'.
                                                    '</span>'.
                                                    'Delete'.
                                                '</a>'.
                                            '</div>'.
                                        '</div>'.
                                    '</div>'.
                                    '<div class="row mt-2">'.
                                        '<div class="col-lg-12">'.
                                            '<span class="badge badge-success rounded-pill pt-2 pb-2 pr-3 pl-2">'.
                                                '<i class="fas fa-circle mr-2"></i>Active'.
                                            '</span>'.
                                        '</div>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>';
        }

        return response()->json([
            "customer" => $customer_result,
            "total_customer" => $total_customer
        ]);
    }

    public function customerCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()) {
            return response()->json([
                "success" => $validator->messages()->all(),
                "message"=> $validator->messages()->all()[0],
                "icon" => "error",
            ]);
        }

        $customer = User::create([
            "id" => Uuid::uuid4()->toString(),
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        $customer->assignRole('customer');

        return response()->json([
            "success" => true,
            "message" => "ID Customer berhasil dibuat",
            "icon" => "success",
        ]);
    }

    public function customer_details($id) {
        $customer = DB::table('users')
            ->where('id', $id)
            ->first();

        $package_total = DB::table('package_customers')
            ->where('user_id', $id)
            ->count();

        $package = DB::table('package_customers')
            ->where('user_id', $id)
            ->first();


        return response()->json([
            "customer" => $customer,
            "package_total" => $package_total,
            "package" => $package,
        ]);
    }

    public function customer_add_package($id, Request $request) {
        $validator = Validator::make($request->all(), [
            "package" => ["required"],
            "total_session" => ["required"],
            "total_price" => ['required'],
            "status" => ['required'],
        ]);

        if($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->messages()->all()[0],
                "icon" => "error",
            ]);
        }

        DB::table('package_customers')
            ->insert([
                "id" => Uuid::uuid4()->getHex(),
                "package" => $request->package,
                "total_package" => $request->total_session,
                "total_money" => $request->total_price,
                "status" => $request->status,
                "total_usage" => 0,
                "user_id" => $id,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

        return response()->json([
            "success" => true,
            "message" => "Paket Berhasil Ditambahkan",
            "icon" => "success",
        ]);
    }
}
