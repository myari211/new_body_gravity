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
        return view('admin.customer_dashboard');
    }

    public function customerDetails($id) {
        return view('admin.details', compact("id"));
    }
}
