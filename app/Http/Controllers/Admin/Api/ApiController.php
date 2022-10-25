<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function dashboard() {
        $revenue = 0;

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

        $clock = DB::table('attendances')
            ->where(function($query) {
                $query->where('status', 'done');
            })
            ->count();

        $revenue_table = DB::table('package_customers')
            ->select(DB::raw('package_customers.*, ((package_customers.total_money/package_customers.total_package)*package_customers.total_usage) as revenue'))
            ->get();

        foreach($revenue_table as $data) {
            $revenue += $data->revenue;
        } 


        return response()->json([
            "customer_count" => $customer_count,
            "trainer_count" => $trainer_count,
            "total_hours" => $clock,
            "total_revenue" => $revenue,
        ]);
    }
}
