<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index($id) {

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
            })
            ->orderBy('updated_at', 'DESC')
            ->get();

        $total_customers = DB::table('package_customers')
            ->where('trainer', $id)
            ->where(function($query) {
                $query->where('total_package', '<>', 'total_usage');
            })
            ->count();

        $customers = DB::table('package_customers')
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'package_customers.user_id');
            })
            ->where('trainer', $id)
            ->where('package_customers.total_package', "<>", 'package_customers.total_usage')
            ->get();

        return view('trainer.dashboard', compact('customers', 'total_customers', 'attendances'));
    }

    public function barcode($id) {
        return view('trainer.barcode');
    }

    public function customer($id) {
        $customers = DB::table('package_customers')
            ->where(function($query) use ($id) {
                $query->where('package_customers.trainer', $id);
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'package_customers.user_id');
            })
            ->select('*', 'package_customers.user_id as customer_id')
            ->get();

        return view('trainer.customer', compact('customers'));
    }

    public function attendances($id) {

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'attendances.customer_id');
            })
            ->orderBy('attendances.updated_at', 'DESC')
            ->select('*', 'attendances.updated_at as time')
            ->get();


        return view('trainer.attendances', compact('attendances'));
    }

    public function profile($id) {
        $total_money = DB::table('package_customers')
            ->where(function($query) use ($id) {
                $query->where('trainer', $id);
            })
            ->sum('total_money');

        $total_package = DB::table('package_customers')
            ->where(function($query) use ($id) {
                $query->where('trainer', $id);
            })
            ->sum('total_package');

        $total_usage = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                // $query->whereMonth('updated_at', Carbon::now()->month);
                $query->where('status', 'done');
            })->count();

        $income = (($total_money/$total_package) * $total_usage);

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
            })
            ->count();


        return view('trainer.profile', compact('income', 'attendances'));
    }
}
