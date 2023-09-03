<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use \Carbon\Carbon;

class PageController extends Controller
{
    public function index($id) {

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
            })
            ->orderBy('updated_at', 'DESC')
            ->limit(4)
            ->get();

        $total_hours = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where("trainer_id", $id);
                $query->where("status", 1);
            })
            ->select(DB::raw('COUNT(*) AS total_hours'))
            ->first();

        $total_customers = DB::table('package_customers')
            ->where('trainer', $id)
            ->where(function($query) {
                $query->where('total_package', '<>', 'total_usage');
            })
            ->count();

        $salary = DB::table('trainer_salaries')
            ->where('trainer_id', $id)
            ->where('month', Carbon::now()->format('M'))
            ->where('year', Carbon::now()->format('Y'))
            ->select(DB::raw('SUM(nominal) AS salary'))
            ->first();

        $customers = DB::table('user_trainers')
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'user_trainers.user_id');
            })
            ->where(function($query) use ($id) {
                $query->where('user_trainers.trainer_id', $id);
            })
            ->select('*', 'users.id as users_id')
            ->limit(5)
            ->get();

        $sharing_profit = DB::table('trainer_salaries')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
            })
            ->where("month", Carbon::now()->format('M'))
            ->where('year', Carbon::now()->format('Y'))
            ->orderBy('created_at', 'ASC')
            ->limit(5)
            ->get();

        return view('trainer.dashboard', compact('customers', 'total_customers', 'attendances', 'salary', 'total_hours', 'sharing_profit'));
    }

    public function barcode($id) {
        return view('trainer.barcode');
    }

    public function customer_dashboard($id) {
        $customers = DB::table('user_trainers')
            ->where('trainer_id', $id)
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'user_trainers.user_id');
            })
            ->get();

        return view('trainer.customer_dashboard', compact('customers'));
    }

    public function customer_details($id) {

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
        $total_money = DB::table('trainer_salaries')
                ->where('trainer_id', $id)
                ->where('month', Carbon::now()->format('M'))
                ->where('year', Carbon::now()->format('Y'))
                ->select(DB::raw('SUM(nominal) AS total_salary'))
                ->first();

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
        

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
            })
            ->count();

            $total_hours = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where("trainer_id", $id);
                $query->where("status", 1);
            })
            ->select(DB::raw('COUNT(*) AS total_hours'))
            ->first();


        return view('trainer.profile', compact('attendances', 'total_money', 'total_hours'));
    }


    public function salary($id) {
        $salary = DB::table('trainer_salaries')
            ->where('trainer_salaries.trainer_id', $id)
            ->select(
                DB::raw('SUM(trainer_salaries.nominal) AS salary'),
                DB::raw('trainer_salaries.month AS month'),
                DB::raw("COUNT(trainer_salaries.id) AS total_hours"),
            )
            ->groupBy('month')
            ->groupBy('year')
            ->orderBy('trainer_salaries.created_at', 'ASC')
            ->get();

        $hours = DB::table('attendances')
            ->where('trainer_id', $id)
            ->select(
                DB::raw('COUNT(*) AS total_hours, DATE_FORMAT(updated_at, "%M") AS month'),
                // DB::raw("DATE FORMAT(updated_at, '%M') AS month"),
                // DB::raw("DATE FORMAT(updated_at, '%Y') AS year"),
            )
            ->groupBy('month')
            // ->groupBy('year')
            ->get();

        return view('trainer.salary', compact('salary', 'hours'));
    }
}
