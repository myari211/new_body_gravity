<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function dashboard() {
        $customer_count = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('users.id', '=', 'model_has_roles.model_id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('model_has_roles.role_id', '=', 'roles.id');
            })
            ->where('roles.name', 'customer')
            ->count();

        $trainer_count = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('users.id', '=', 'model_has_roles.model_id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('model_has_roles.role_id', '=', 'roles.id');
            })
            ->where('roles.name', 'trainer')
            ->count();


        return response()->json([
            "customer_count" => $customer_count,
            "trainer_count" => $trainer_count,
        ]);
    }
}
