<?php

namespace App\Http\Controllers\Customer\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
