<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;
use App\User;
use App\Attendance;
use Auth;

class ApiController extends Controller
{
    public function dashboard($id) {
        $customer_show = "";

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


        $user = DB::table('users')
            ->where('users.id', $id)
            ->first();

        $customer_count = DB::table('package_customers')
            ->where('trainer', $id)
            ->count();

        $customer = DB::table('package_customers')
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'package_customers.user_id');
            })
            ->select('*', "users.id as customer_id", "package_customers.id as package_id")
            ->where('trainer', $id)
            ->get();

        foreach($customer as $data) {
            // for($i = 0; $i < 3; $i ++) {
            $customer_show .= '<div class="col-lg-4">'.
            '<a href="javascript:void()" onclick="customerDetails(this);" data-customers-id="'.$data->customer_id.'" data-package-id="'.$data->package_id.'">'.
                '<div class="card w-100 z-depth-0">'.
                    '<div class="card-body">'.
                        '<div class="row">'.
                            '<div class="col-lg-4 d-flex align-items-center">'.
                                '<img class="rounded-circle border" src="'. asset('image/body_gravity_black.png') .'" style="width: 60px; height: 60px;">'.
                            '</div>'.
                            '<div class="col-lg-8">'.
                                '<div class="row">'.
                                    '<div class="col-lg-12">'.
                                        '<span style="font-size:12px; font-weight: 600">'.$data->first_name." ".$data->last_name.'</span>'.
                                    '</div>'.
                                '</div>'.
                                '<div class="row">'.
                                    '<div class="col-lg-12">'.
                                        '<span style="font-size:12px; font-weight: 600">'.($data->total_package - $data->total_usage).' left</span>'.
                                    '</div>'.
                                '</div>'.
                                '<div class="row mt-4">'.
                                    '<div class="col-lg-12 d-flex justify-content-end">'.
                                        // '<span class="badge grey lighten-1 pr-2 pl-2 pt-1 pb-1 z-depth-0 rounded-pill" style="font-size:12px;">'.$data->package.'</span>';
                                        '<span class="badge grey lighten-1 pr-2 pl-2 pt-1 pb-1 z-depth-0 rounded-pill" style="font-size:12px;">'.$data->package.'</span>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>'.
                '</div>'.
            '</a>'.
        '</div>';
            // }
        }

        return response()->json([
            "user" => $user,
            "customer_count" => $customer_count,
            "customer" => $customer_show,
            "income" => $income,
        ]);
    }

    public function getBarcode($package_id, $customer_id, $trainer_id) {
        $count = DB::table('attendances')
                    ->where([
                        ['customer_id', $customer_id],
                        ['package_id', $package_id],
                        ['trainer_id', $trainer_id],
                        ['status', 'active'],
                    ])
                    ->count();

        $data = DB::table('attendances')
                ->where([
                    ['customer_id', $customer_id],
                    ['package_id', $package_id],
                    ['trainer_id', $trainer_id],
                    ['status', 'active'],
                ])
                ->first();

        return response()->json([
            "count" => $count,
            "data" => $data,
        ]);
    }

    public function initialBarcode($package_id, $customer_id, $trainer_id) {
        $attendance_count = DB::table('attendances')
            ->where([
                ['customer_id', $customer_id],
                ['package_id', $package_id],
                ['trainer_id', $trainer_id],
                ['status', 'active'],
            ])->count();


        if($attendance_count < 1) {
            $attendace = DB::table('attendances')
                ->insert([
                    "id" => Uuid::uuid4()->getHex(),
                    "customer_id" => $customer_id,
                    "trainer_id" => $trainer_id,
                    "package_id" => $package_id,
                    "status" => "active",
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                    "token" => Uuid::uuid4()->getHex(),
                ]);
        }
        else
        {
            $attendance = DB::table('attendances')
                ->where([
                    ['customer_id', $customer_id],
                    ['package_id', $package_id],
                    ['trainer_id', $trainer_id],
                    ['status', 'active'],
                ])
                ->update([
                    "token" => Uuid::uuid4()->getHex(),
                    "updated_at" => Carbon::now(),
                ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Barcode only 10 minutes",
            "icon" => "warning",
        ]);
    }

    public function updateToken($package_id, $customer_id, $trainer_id) {
        $attendance_count = DB::tablel('attendances')
            ->where([
                ["customer_id", $customer_id],
                ["package_id", $package_id],
                ["trainer_id", $trainer_id],
                ["status", 'active'],
            ])
            ->count();


        if($attendance_count < 1) {
            $attendance = DB::table('attendances')
                ->where([
                    ['customer_id' => $customer_id],
                    ['package_id' => $package_id],
                    ['trainer_id' => $trainer_id],
                    ['status', 'active'],
                ])
                ->update([
                    "token" => Uuid::uuid4()->getHex(),
                    "updated_at" => Carbon::now(),    
                ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Token automatically update every 10 minutes !",
            "icon" => "warning",
        ]);
    }

    public function attendaces(Request $request, $id) {
        $package = DB::table('attendances')
            ->leftJoin('package_customers', function($join) {
                $join->on('package_customers.id', 'attendances.package_id');
            })
            ->where('token', $id)
            ->first();

        if($package->total_usage < $package->total_package) {
            $attendances = DB::table('attendances')
                ->leftJoin('package_customers', function($join) {
                    $join->on('package_customers.id', 'attendances.package_id');
                })
                ->where('token', $id)
                ->update([
                    'package_customers.total_usage' => DB::raw('total_usage + 1'),
                    'attendances.status' => 'done',
                    'attendances.updated_at' => Carbon::now(),
                    'package_customers.updated_at' => Carbon::now(),
                ]);
        }
        else
        {
            return response()->json([
                "success" => "false",
                "message" => "You do not have active package",
            ]);
        }

        $attendances_get = DB::table('attendances')
            ->where('token', $id)
            ->first();

        // $package_update = DB::table('package_customers')
        //     ->where('id', $attendaces_get->id)
        //     ->update(array(
        //             'total_package' => DB::raw('total_package - 1')
        //         )
        //     );

        return response()->json([
            "data" => $attendances_get,
        ]);
    }



    public function create_customers(Request $request) {
        $validator = Validator::make($request->all(), [
            "first_name" => ['required', 'min:3'],
            "email" => ['email', 'unique:users'],
            "password" => ['required', 'min:3'],
        ]);

        if($validator->fails()) {
            toast()->warning($validator->messages()->all()[0]);
            return redirect()->back();
        }

        try {
            $user = User::create([
                "id" => Uuid::uuid4()->toString(),
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "password" => bcrypt($request->password),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
            $user->assignRole('customer');
    
            $assignTrainer = DB::table('user_trainers')
                ->insert([
                    "id" => Uuid::uuid4()->toString(),
                    "user_id" => $user->id,
                    "trainer_id" => Auth::user()->id,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
        }
        catch(\Exception $e) {
            toast()->error('error', withErrors(['error' => $e->getMessages()]));
            return redirect()->back();
        }

        toast()->success('Customers successfully created');
        return redirect()->back();
    }


    public function create_profile($id, Request $request) {
        $validator = Validator::make($request->all(), [
            "phone" => ['required', 'min: 10'],
            "birthdate" => ['required'],
            "gender" => ['required'],
        ]);

        if($validator->fails()) {
            toast()->warning($validator->messages()->all()[0]);
        }

        $check = DB::table('personal_information_users')
            ->where('user_id', $id)
            ->count();

        if($check < 1) {
            $create = DB::table('personal_information_users')
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
        else
        {
            $update = DB::table('personal_information_users')
                ->where('user_id', $id)
                ->update([
                    "phone" => $request->phone,
                    "birth_date" => $request->birth_date,
                    "gender" => $request->gender,
                    "update_at" => Carbon::now(),
                ]);
        }

        toast()->success('Successfully Created Profile');
        return redirect()->back();
    }

    public function create_details($id, Request $request) {
        $validator = Validator::make($request->all(), [
            "q1" => ['required'],
            "q2" => ['required'],
            "q3" => ['required'],
            "q4" => ['required'],
            "q5" => ['required'],
            "q6" => ['required'],
            "q7" => ['required'],
            "q8" => ['required'],
            "q9" => ['required'],
        ]);

        if($validator->fails()) {
            toast()->warning($validator->messages()->all()[0]);
            return redirect()->back();
        }

        $details_count = DB::table('personal_users')
            ->where('user_id', $id)
            ->count();

        if($details_count < 1) {
            $createDetails = DB::table('personal_users')
                ->insert([
                    "id" => Uuid::uuid4()->toString(),
                    "q1" => $request->q1,
                    "q2" => $request->q2,
                    "q3" => $request->q3,
                    "q4" => $request->q4,
                    "q5" => $request->q5,
                    "q6" => $request->q6,
                    "q7" => $request->q7,
                    "q8" => $request->q8,
                    "q9" => $request->q9,
                    "user_id" => $id,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
        }
        else
        {
            $updateDetails = DB::table('personal_users')
                ->where('user_id', $id)
                ->update([
                    "q1" => $request->q1,
                    "q2" => $request->q2,
                    "q3" => $request->q3,
                    "q4" => $request->q4,
                    "q5" => $request->q5,
                    "q6" => $request->q6,
                    "q7" => $request->q7,
                    "q8" => $request->q8,
                    "q9" => $request->q9,
                    "updated_at" => Carbon::now(),
                ]);
        }

        toast()->success('Successfully updated customer details');
        return redirect()->back();
    }

    public function create_package($id, Request $request) {
        $validator = Validator::make($request->all(), [
            "package" => ['required'],
            "total_package" => ['required'],
            "status" => ['required'],
            "total_price" => ['required'],
        ]);

        if($validator->fails()) {
            toast()->warning($validator->messages()->all()[0]);
            return redirect()->back();
        }

        $addPackage = DB::table('package_customers')
            ->insert([
                "id" => Uuid::uuid4()->toString(),
                "package" => $request->package,
                "total_package" => $request->total_package,
                "total_money" => $request->total_price,
                "total_usage" => 0,
                "trainer" => Auth::user()->id,
                "user_id" => $id,
                "status" => $request->status,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);

        toast()->success("Successfully Adding Package");
        return redirect()->back();
    }


    public function create_attendances($user_id, $trainer_id, $package_id) {
        $attendances_count = DB::table('attendances')
            ->where(function($query) use ($user_id, $trainer_id, $package_id) {
                $query->where("customer_id", $user_id);
                $query->where('trainer_id', $trainer_id);
                $query->where('package_id', $package_id);
                $query->where('status', 0);
            })
            ->count();

        $attendances_first = DB::table('attendances')
            ->where(function($query) use ($user_id, $trainer_id, $package_id) {
                $query->where("customer_id", $user_id);
                $query->where('trainer_id', $trainer_id);
                $query->where('package_id', $package_id);
                $query->where('status', 0);
            })
            ->first();

        if($attendances_count > 0) {
            $updateAttendances = Attendance::find($attendances_first->id)
                ->update([
                    "token" => random_int(1000000, 9999999),
                    "updated_at" => Carbon::now(),
                ]);

            $attendances = DB::table('attendances')
                ->where(function($query) use ($user_id, $trainer_id, $package_id) {
                    $query->where("customer_id", $user_id);
                    $query->where('trainer_id', $trainer_id);
                    $query->where('package_id', $package_id);
                    $query->where('status', 0);
                })
                ->first();
        }
        else {
            $attendances = Attendance::create([
                "id" => Uuid::uuid4()->toString(),
                "customer_id" => $user_id,
                "trainer_id" => $trainer_id,
                "package_id" => $package_id,
                "status" => 0,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
                "token" => random_int(1000000, 9999999),
            ]);
        }

        return response()->json([
            "success" => true,
            "messages" => "Berhasil generate",
            "token" => $attendances->token,
        ]);
    }
}
