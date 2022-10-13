<?php

namespace App\Http\Controllers\Customer\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendancesController extends Controller
{
    public function index($id) {
        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('customer_id', $id);
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'attendances.trainer_id');
            })
            ->select('*', 'attendances.updated_at as time')
            ->orderBy('attendances.updated_at', 'DESC')
            ->get();

        return view('customer.attendances', compact('attendances'));
    }

    public function package($id) {
        $package = DB::table('package_customers')
            ->where(function($query) use ($id) {
                $query->where('package_customers.user_id', $id);
            })
            ->get();

        return view('customer.package', compact('package'));
    }

    public function profile($id) {
        $profile = DB::table('users')
            ->where(function($query) use ($id) {
                $query->where('id', $id);
            })
            ->get();

        $package = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('customer_id', $id);
            })
            ->count();

        $package_month = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('customer_id', $id);
                $query->where('updated_at', date('M'));
                $query->where('status', 'done');
                // $query->where('updated_at', date('Y'));
            })
            ->count();

        return view('customer.profile', compact('profile', 'package', 'package_month'));
    }
}
