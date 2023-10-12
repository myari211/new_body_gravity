<?php

namespace App\Http\Controllers\GlobalVariable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GlobalVariableController extends Controller
{
    public function getUser($param) {
        $user = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->where('roles.name', $param)
            ->get();


        return $user;
    }


    public function getUserPackage() {
        $user = DB::table("users")
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->leftJoin('personal_information_users', function($join) {
                $join->on('personal_information_users.user_id', '=', 'users.id');
            })
            ->leftJoin('package_customers', function($join) {
                $join->on('users.id', '=', 'package_customers.user_id');
            })
            ->where('roles.name', 'customer')
            ->get();


        return $user;
    }
}
