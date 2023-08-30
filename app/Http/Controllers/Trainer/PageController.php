<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

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

        $customers = DB::table('user_trainers')
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'user_trainers.user_id');
            })
            ->where(function($query) use ($id) {
                $query->where('user_trainers.trainer_id', $id);
            })
            ->select('*', 'users.id as users_id')
            ->get();

        return view('trainer.dashboard', compact('customers', 'total_customers', 'attendances'));
    }

    public function barcode($id) {
        return view('trainer.barcode');
    }

    public function customer_dashboard() {
        $userId = Auth::user()->id;


        return view('trainer.customer_dashboard');
    }

    public function customer_details($id) {
        // $customers = DB::table('package_customers')
        //     ->where(function($query) use ($id) {
        //         $query->where('package_customers.trainer', $id);
        //     })
        //     ->leftJoin('users', function($join) {
        //         $join->on('users.id', '=', 'package_customers.user_id');
        //     })
        //     ->select('*', 'package_customers.user_id as customer_id')
        //     ->get();

        $trainer_id = Auth::user()->id;

        $customers = DB::table("users")
            ->where(function ($query) use ($id) {
                $query->where("users.id", $id);
            })
            ->get();

        $session = DB::table('attendances')
            ->where('customer_id', $id)
            ->count();

        $personal_information = DB::table('personal_information_users')
            ->where('user_id', $id)
            ->first();

        $personal_count = DB::table('personal_information_users')
            ->where('user_id', $id)
            ->count();

        $attendance = DB::table('attendances')
            ->where('customer_id', $id)
            ->get();

        $details = DB::table('personal_users')
            ->where('user_id', $id)
            ->first();

        $details_count = DB::table('personal_users')
            ->where('user_id', $id)
            ->count();

        $package = DB::table('package_customers')
            ->where('user_id', $id)
            ->first();

        $attendances = DB::table('attendances')
            ->where(function ($query) use ($id) {
                $query->where('customer_id', $id);
                $query->where('status', 1);
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'attendances.trainer_id');
            })
            ->select('attendances.*', 'users.first_name', 'users.last_name')
            ->orderBy('attendances.created_at', 'asc')
            ->get();

        $user_id = $id;

        return view('trainer.customer', compact('customers', 'session', 'personal_information', 'personal_count', 'user_id', 'details', 'details_count', 'package', 'attendances'));
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
        
        if($total_money != 0 || $total_package != 0 || $total_usage != 0) {
            $income = (($total_money/$total_package) * $total_usage);
        }
        else
        {
            $income = 0;
        }

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
            })
            ->count();


        return view('trainer.profile', compact('income', 'attendances'));
    }
}
