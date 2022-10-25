<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

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
}
