<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function dashboard($id) {
        $trainer = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->where(function($query) {
                $query->where('roles.name', 'trainer');
            })
            ->get();

        return view('admin.dashboard', compact('trainer'));
    }
    public function customer() {
        $customer = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->leftJoin('personal_information_users', function($join) {
                $join->on('personal_information_users.user_id', '=', 'users.id');
            })
            ->leftJoin('user_trainers', function($join) {
                $join->on('user_trainers.user_id', '=', 'users.id');
                $join->on('user_trainers.trainer_id', '=', 'users.id');
            })
            ->leftJoin('package_customers', function($join) {
                $join->on('package_customers.user_id', '=', 'users.id');
            })
            ->where(function($query) {
                $query->where('roles.name', 'customer');
            })
            ->select('*', 'user_trainers.trainer_id as trainer_name', 'users.id as user_id')
            ->get();

        return view('admin.customer_dashboard', compact('customer'));
    }

    public function customerDetails($id) {
        $user = DB::table("users")
            ->where(function($query) use ($id) {
                $query->where('users.id', $id);
            })
            ->leftJoin('personal_information_users', function($join) {
                $join->on('personal_information_users.user_id', '=', 'users.id');
            })
            ->leftJoin('personal_users', function($join) {
                $join->on('personal_users.user_id', '=', 'users.id');
            })
            ->first();

        $personal_information = DB::table('personal_information_users')
            ->where('user_id', $id)
            ->first();

        $trainer = DB::table('user_trainers')
            ->leftJoin('users', function($join) {
                $join->on('user_trainers.trainer_id', '=', 'users.id');
            })
            ->where(function($query) use ($id) {
                $query->where("user_trainers.user_id", $id);
            })
            ->select('*', 'trainer_id as id_trainer')
            ->first();

        if($trainer != NULL) {
            $trainer_id = $trainer->id_trainer;

            $session = DB::table("attendances")
                ->where(function($query) use ($id, $trainer_id) {
                    $query->where('attendances.user_id', $id);
                    $query->where('attendances.trainer_id', $trainer_id);
                })
                ->count();
        }
        else {
            $session = 0;
        }

        return view('admin.details', compact("user", "personal_information", 'trainer', 'session'));
    }

    public function customer_package() {
        return view('admin.customer_package');
    }
}
