<?php

namespace App\Http\Controllers\Customer\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;

class ApiController extends Controller
{
    public function dashboard($id) {
        $user_id = $id;
        $html = "";
        $html_attendances = "";

        $package_count = DB::table('package_customers')
            ->where(function($query) use ($user_id) {
                $query->where('package_customers.user_id', $user_id);
                $query->where('package_customers.total_package', '<>', 'package_customers.total_usage');
            })
            ->first();


        $package = DB::table('package_customers')
            ->where(function($query) use ($user_id) {
                $query->where('package_customers.user_id', $user_id);
            })
            ->leftJoin('users', function($join) {
                $join->on('users.id', '=', 'package_customers.trainer');
            })
            ->get();

        $attendances = DB::table('attendances')
            ->where('customer_id', $user_id)
            ->where('status', 'done')
            ->limit(5)
            ->get();


        foreach($package as $data) {
            $html .= "<div class='col-12'>".
                    "<div class='card z-depth-0 border'>".
                        "<div class='card-body'>".
                            "<div class='row'>".
                                "<div class='col-12 d-flex justify-content-between'>".
                                    "<span style='font-size:20px; font-weight: 600'>Rp. ".number_format(($data->total_money - (($data->total_money/$data->total_package) * $data->total_usage)), 0, ',', '.')."</span>".
                                    "<span class='badge badge-primary pt-2 pb-2 pr-3 pl-3 rounded-pill z-depth-0'>".$data->package."</span>".
                                "</div>".
                            "</div>".
                            "<div class='row mt-2'>".
                                "<div class='col-12'>".
                                    "<span style='font-weight: 500; font-size: 12px;' class='text-muted'>".($data->total_package - $data->total_usage)." Session Left</span>".
                                "</div>".
                            "</div>".
                        "</div>".
                    "</div>".
                "</div>";
        }

        foreach($attendances as $data) {
            $html_attendances .= '<div class="col-4 mt-2">'.
            '<div class="card z-depth-0 border">'.
                '<div class="card-body">'.
                    '<div class="row">'.
                        '<div class="col-12 d-flex justify-content-center">'.
                            '<span style="font-size: 20px; font-weight: 600;">'.(date("d", strtotime($data->updated_at))).'</span>'.
                        '</div>'.
                    '</div>'.
                    '<div class="row">'.
                        '<div class="col-12 d-flex justify-content-center">'.
                            '<span>'.(date("M", strtotime($data->updated_at))).'</span>'.
                        '</div>'.
                    '</div>'.
                '</div>'.
            '</div>'.
        '</div>';
        }


        return response()->json([
            'package' => $package_count,
            'attendances' => $html_attendances,
            'data' => $html,
            "test" => $attendances,
        ]);
    }

    public function rupiah($value) {
        $result = "Rp" . number_format($value, 2, ',','.');
        return $result;
    }

    public function attendances_details($id) {
        $attendances = DB::table('attendances')
            ->where('id', $id)
            ->first();


        return response()->json([
            "data" => $attendances
        ]);
    }

    public function attendances_scan($token) {
            $attendances = DB::table('attendances')
                ->where('token', $token)
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

            if($attendances->status == 0) {
                DB::beginTransaction();
                try {
                    $update_attendances = DB::table('attendances')
                    ->where('token', $token)
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

                DB::commit();
                toast()->success('Successfully fill attendances!');
                return redirect('/');
            }
            else
            {
                toast()->warning('QR Code is invalid!');
                return redirect('/');
            }
    }
}
