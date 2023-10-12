<?php

namespace App\Http\Controllers\Customer\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use \Carbon\Carbon;
use Auth;
use Ramsey\Uuid\Uuid;

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
            ->where('status', 1)
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
                $query->where('status', 1);
            })
            ->count();

        $package_month = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('customer_id', $id);
                $query->where('updated_at', date('M'));
                $query->where('status', '1');
                // $query->where('updated_at', date('Y'));
            })
            ->count();

        return view('customer.profile', compact('profile', 'package', 'package_month'));
    }

    public function fill_token(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'token' => ['required'],
        ]);

        if($validator->fails()) {
            toast()->warning($validator->messages->all()[0]);
            return redirect()->back();
        }

        $attendances_count = DB::table('attendances')
            ->where('token', $request->token)
            ->where('customer_id', Auth::user()->id)
            ->where('status', 0)
            ->count();

        if($attendances_count < 1) {
            toast()->warning('Data Not Found!');
            return redirect()->back();
        }


        $attendances = DB::table('attendances')
            ->where('token', $request->token)
            ->where('customer_id', $id)
            ->where('status', 0)
            ->first();

        $package = DB::table('package_customers')
            ->where('user_id',$attendances->customer_id)
            ->first();

        $trainer_id = $attendances->trainer_id;

        $percentage = DB::table('trainer_percentages')
            ->where('trainer_id', $trainer_id)
            ->first();

        $packagePrice = $package->total_money / $package->total_package;
        $nominal = ($percentage->percentage/100) * $packagePrice;
        $profit = $packagePrice - $nominal;

        if($attendances->status == 0) {
            DB::beginTransaction();
            try {
                $update_attendances = DB::table('attendances')
                ->where('token', $request->token)
                ->update([
                    "status" => 1,
                    "updated_at" => Carbon::now(),
                ]);
            }
            catch(ValidationException $e) {
                DB::rollback();
                toast()->warning('Attendances Gagal, Harap Coba lagi');
                return redirect()->back();
            }


            try {
                $update_package = DB::table('package_customers')
                    ->where('user_id', $attendances->customer_id)
                    ->update([
                        "total_usage" => $package->total_usage + 1,
                        "updated_at" => Carbon::now(),
                    ]);
            }
            catch(ValidationException $e) {
                DB::rollback();
                toast()->warning('Attendances Gagal, Harap coba lagi');
                return redirect()->back();
            }


            try {
                $update_sallary = DB::table('trainer_salaries')
                    ->insert([
                        "id" => Uuid::uuid4()->toString(),
                        "trainer_id" => $trainer_id,
                        "customer_id" => $attendances->customer_id,
                        "package_id" => $package->id,
                        "nominal" => $nominal,
                        "month" => Carbon::now()->format('M'),
                        "year" => Carbon::now()->format('Y'),
                        "percentage" => $percentage->percentage,
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                    ]);
            }
            catch(ValidationException $e) {
                DB::rollback();
                toast()->warning('Attendances Gagal, Harap Coba lagi');
                return redirect()->back();
            }

            try {
                $update_revenue = DB::table('revenues')
                    ->insert([
                        "id" => Uuid::uuid4()->toString(),
                        "trainer_id" => $trainer_id,
                        "costumer_id" => $attendances->customer_id,
                        "package_id" => $package->id,
                        "nominal" => $packagePrice,
                        "revenue" => $percentage->percentage,
                        "profit" => $profit,
                        "month" => Carbon::now()->format("M"),
                        "year" => Carbon::now()->format('Y'),
                        "from" => NULL,
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                    ]);
            }
            catch(ValidationException $e) {
                DB::rollback();
                toast()->warning('Attendances Gagal, Harap Coba Lagi');
                return redirect()->back();
            }

            DB::commit();
            toast()->success('Successfully fill attendances!');
            return redirect()->back();
        }
        else
        {
            toast()->warning('QR Code is invalid!');
            return redirect()->back();
        }
    }
}
