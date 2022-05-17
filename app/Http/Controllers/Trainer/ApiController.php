<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function dashboard($id) {
        $customer_show = "";

        $user = DB::table('users')
            ->where('users.id', $id)
            ->first();

        $customer_count = DB::table('package_customers')
            ->where('trainer', $id)
            ->count();

        $customer = DB::table('package_customers')
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'package_customers.user_id');
            })
            ->where('trainer', $id)
            ->get();

        foreach($customer as $data) {
            // for($i = 0; $i < 3; $i ++) {
            $customer_show .= '<div class="col-lg-4">'.
            '<div class="card w-100">'.
                '<div class="card-body">'.
                    '<div class="row">'.
                        '<div class="col-lg-4 d-flex align-items-center">'.
                            '<img class="rounded-circle border" src="'. asset('image/body_gravity_black.png') .'" style="width: 60px; height: 60px;">'.
                        '</div>'.
                        '<div class="col-lg-8">'.
                            '<div class="row">'.
                                '<div class="col-lg-12">'.
                                    '<span style="font-size:12px; font-weight: 600">'.$data->first_name." ".$data->last_name.'</span>'.
                                '</div>'.
                            '</div>'.
                            '<div class="row">'.
                                '<div class="col-lg-12">'.
                                    '<span style="font-size:12px; font-weight: 600">'.($data->total_package - $data->total_usage).' left</span>'.
                                '</div>'.
                            '</div>'.
                            '<div class="row mt-4">'.
                                '<div class="col-lg-12 d-flex justify-content-end">'.
                                    // '<span class="badge grey lighten-1 pr-2 pl-2 pt-1 pb-1 z-depth-0 rounded-pill" style="font-size:12px;">'.$data->package.'</span>';
                                    '<span class="badge grey lighten-1 pr-2 pl-2 pt-1 pb-1 z-depth-0 rounded-pill" style="font-size:12px;">'.$data->package.'</span>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>'.
            '</div>'.
        '</div>';
            // }
        }

        return response()->json([
            "user" => $user,
            "customer_count" => $customer_count,
            "customer" => $customer_show,
        ]);
    }
}
