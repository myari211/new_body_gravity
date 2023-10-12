<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use RealRashid\SweetAlert\Facades\Alert;
use \Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\App;
use App\Traits\UserTraits;


class CustomerController extends Controller
{
    use UserTraits;


    public function initiateVariable() {
        $controller = App::make('\App\Http\Controllers\GlobalVariable\GlobalVariableController');

        return $controller;
    }

    public function dashboard($id) {
        $trainer = $this->initiateVariable()->callAction('getUser', ['trainer']);

        $revenue = DB::table('revenues')
            ->where('month', Carbon::now()->format('M'))
            ->where('year', Carbon::now()->format('Y'))
            ->select(DB::raw("SUM(nominal) as revenue"))
            ->first();


        $revenue_day = DB::table('revenues')
            ->select(DB::raw("SUM(nominal) as revenue"))
            ->whereDate('created_at', Carbon::now())
            ->first();

        $revenue_before_day = DB::table('revenues')
            ->select(DB::raw("SUM(nominal) as revenue"))
            ->whereDate("created_at", Carbon::now()->subDay())
            ->first();

        $revenue_chart = DB::table('revenues')
            ->select(DB::raw("SUM(nominal) as revenue"))
            ->groupBy('month')
            ->get();

        $revenue_before_month = DB::table('revenues')
            ->select(DB::raw("SUM(nominal) as revenue"))
            ->where('month', Carbon::now()->subMonth(1)->format('M'))
            ->where('year', Carbon::now()->format('Y'))
            ->first();

        $profit = DB::table('revenues')
            ->where('month', Carbon::now()->format('M'))
            ->where('year', Carbon::now()->format('Y'))
            ->select(DB::raw("SUM(profit) as profit"))
            ->first();

        $profit_day = DB::table('revenues')
            ->select(DB::raw("SUM(profit) as profit"))
            ->whereDate('created_at', Carbon::now())
            ->first();

        return view('admin.dashboard', compact('trainer', 'revenue', 'profit', 'revenue_day', 'profit_day', 'revenue_before_month', 'revenue_before_day', 'revenue_chart'));
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
            ->select('*', 'users.id as user_id')
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
                    $query->where('attendances.customer_id', $id);
                    $query->where('attendances.trainer_id', $trainer_id);
                })
                ->count();
        }
        else {
            $session = 0;
        }

        $package_left = DB::table('package_customers')
            ->where(function($query) use ($id) {
                $query->where('package_customers.user_id', $id);
                $query->where(DB::raw('package_customers.total_package - package_customers.total_usage'), '>', 0);
            })
            ->first();

        $package = DB::table('package_customers')
            ->where(function($query) use ($id) {
                $query->where('package_customers.user_id', $id);
            })
            ->get();

        $attendances = DB::table('attendances') 
            ->where(function($query) use ($id) {
                $query->where('attendances.customer_id', $id);
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'attendances.trainer_id');
            })
            ->orderBy('attendances.created_at', 'ASC')
            ->get();
        

        return view('admin.details', compact("user", "personal_information", 'trainer', 'session', 'package_left', 'package', 'attendances'));
    }

    public function customerProfile($id, Request $request) {
        $validator = Validator::make($request->all(), [
            "first_name" => "required|min:2",
            "last_name" => "required",
            "email" => "required",
            "phone" => "required|min:9",
            "birth_date" => "required",
            "gender" => "required",
        ]);

        if($validator->fails()) {
            toast()->error('Failed', $validator->messages()->all()[0]);
            return redirect()->back();
        }
        else {
            $personalInformationCount = DB::table("personal_information_users")
                ->where(function($query) use ($id) {
                    $query->where("user_id", $id);
                })
                ->count();

            $updateUser = DB::table('users')
                ->where(function($query) use ($id) {
                    $query->where('id', $id);
                })
                ->update([
                    "first_name" => $request->first_name,
                    "last_name" => $request->last_name,
                    "email" => $request->email,
                ]);

            if($personalInformationCount < 1) {
                $createPersonalInformation = DB::table("personal_information_users")
                    ->insert([
                        "id" => Uuid::uuid4()->toString(),
                        "phone" => $request->phone,
                        "birth_date" => $request->birth_date,
                        "user_id" => $id,
                        "gender" => $request->gender,
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                    ]);
            }
            else {
                $updatePersonalInformation = DB::table('personal_information_users')
                    ->where(functioN($query) use ($id) {
                        $query->where("user_id", $id);
                    })
                    ->update([
                        "phone" => $request->phone,
                        "birth_date" => $request->birth_date,
                        "gender" => $request->gender,
                        "updated_at" => Carbon::now(),
                    ]);
            }
            toast()->success("Success", "Data has been saved");
            return redirect()->back();
        }
    }

    public function list() {
        $user = $this->getUserAllPersonalInformation();

        return view('admin.customer_package', compact('user'));
    }
}
