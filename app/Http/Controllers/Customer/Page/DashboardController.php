<?php

namespace App\Http\Controllers\Customer\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard($id) {
        $package_count = DB::table('package_customers')
            ->where('user_id', $id)
            ->count();

        if($package_count < 1) {
            $package = 0;
        }
        else
        {
            $package = DB::table('package_customers')
                ->where('user_id', $id)
                ->select(DB::raw('SUM(total_package) - SUM(total_usage) as package_left'))
                ->first();
        }

        $package_details = DB::table('package_customers')
            ->where('user_id', $id)
            ->orderBy('total_usage', 'DESC')
            ->first();

        $monthAttendances = DB::table('attendances')
            ->where('customer_id', $id)
            ->where('status', 1)
            ->select(DB::raw("DATE_FORMAT(updated_at, '%M-%y') AS month"))
            // ->where('attendances.monthAttendances', Carbon::now()->format('M'))
            ->count();

        $attendancesCount = DB::table('attendances')
            ->where('customer_id', $id)
            ->where('status', 1)
            ->count();

        $trainer = DB::table("user_trainers")
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'user_trainers.trainer_id');
            })
            ->where('user_id', $id)
            ->first();

        // return $package->package_left;

        return view('customer.dashboard', compact('package', 'package_count', 'monthAttendances', 'trainer', 'package_details'));
    }
}
