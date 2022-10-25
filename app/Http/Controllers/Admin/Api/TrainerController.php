<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Str;

class TrainerController extends Controller
{
    public function trainer() {
        $trainer_result = "";

        $trainer = DB::table('users')
            ->leftJoin('model_has_roles', function ($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->where('roles.name', 'trainer')
            ->select('*', 'users.id as user_id')
            ->get();

            foreach($trainer as $data) {
                $trainer_result .= '<div class="col-lg-3">'.
                    '<div class="card z-depth-0">'.
                            '<div class="card-body">'.
                                '<div class="row">'.
                                    '<div class="col-lg-4">'.
                                        '<img src="'.(asset('image/body_gravity_black.png')).'" class="rounded-circle border" style="width:80px; height:80px;">'.
                                    '</div>'.
                                    '<div class="col-lg-8">'.
                                        '<div class="row">'.
                                            '<div class="col-lg-12 d-flex justify-content-between">'.
                                                '<span style="font-weight:600;">'.$data->first_name.' '.$data->last_name.'</span>'.
                                                '<button type="button" class="btn btn-md rounded-0 p-0 z-depth-0 m-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                                                    '<i class="fas fa-ellipsis-v"></i>'.
                                                '</button>'.
                                                '<div class="dropdown-menu">'.
                                                    '<a class="dropdown-item" href="'.(route('trainer_details', $data->user_id)).'" style="font-weight:600">'.
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
                                        '<div class="row">'.
                                            '<div class="col-lg-12">'.
                                                '<span style="font-size: 12px; font-weight: 600">'.$data->email.'</span>'.
                                            '</div>'.
                                        '</div>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>';
            }


        return response()->json([
            "trainer" => $trainer_result,
        ]);
    }


    public function trainerCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->messages()->all()[0],
                "icon" => "error",
            ]);
        }

        $trainer = User::create([
            "id" => Uuid::uuid4()->toString(),
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        $trainer->assignRole('trainer');

        return response()->json([
            "success" => true,
            "message" => "Trainer Berhasil Ditambahkan",
            "icon" => "success",
        ]);
    }
}
