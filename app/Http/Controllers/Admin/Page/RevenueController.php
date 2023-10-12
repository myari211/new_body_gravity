<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class RevenueController extends Controller
{
    public function getTotalIncome() {
        $income = DB::table('package_customers')
            ->select(DB::raw('SUM(total_money) AS income'))
            ->first();

        return $income;
    }

    public function getMonthIncome() {
        $result = DB::table('package_customers')
            ->whereMonth('updated_at', Carbon::now())
            ->select(DB::raw('SUM(total_money) AS income'))
            ->first();

        return $result;
    }
    

    public function getTotalReceivable() {
        $receivable = DB::table('package_customers')->get();

        $result = $this->operationTotalReceivable($receivable);

        return $result;
    }

    public function getMonthReceivable() {
        $receivable = DB::table("package_customers")
            ->whereMonth('updated_at', Carbon::now())
            ->get();

        $result = $this->operationTotalReceivable($receivable);

        return $result;
    }


    public function getTotalGross() {
        $gross = DB::table('package_customers')->get();

        $result = $this->operationTotalGross($gross);

        return $result;
    }

    public function getMonthGross() {
        $gross = DB::table('package_customers')
            ->whereMonth('updated_at', Carbon::now())
            ->get();

        $result = $this->operationTotalGross($gross);

        return $result;
    }

    public function getTotalProfit() {
        $profit = DB::table('package_customers')
            ->leftJoin('trainer_percentages', function($join) {
                $join->on('package_customers.trainer', '=', 'trainer_percentages.trainer_id');
            })
            ->get();

        $result = $this->operationTotalProfit($profit);

        return $result;
    }


    public function getMonthProfit() {
        $profit = DB::table('package_customers')
            ->leftJoin('trainer_percentages', function($join) {
                $join->on('package_customers.trainer', '=', 'trainer_percentages.trainer_id');
            })
            ->whereMonth('package_customers.updated_at', Carbon::now())
            ->get();

        $result = $this->operationTotalProfit($profit);

        return $result;
    }


    public function getTotalSharing() {
        $sharing = DB::table('package_customers')
            ->leftJoin('trainer_percentages', function($join) {
                $join->on('package_customers.trainer', '=', 'trainer_percentages.trainer_id');
            })
            ->get();

        $result = $this->operationTotalSharing($sharing);

        return $result;
    }

    public function getMonthSharing() {
        $sharing = DB::table('package_customers')
            ->leftJoin('trainer_percentages', function($join) {
                $join->on('package_customers.trainer', '=', 'trainer_percentages.trainer_id');
            })
            ->whereMonth('package_customers.updated_at', Carbon::now())
            ->get();

        $result = $this->operationTotalSharing($sharing);

        return $result;
    }


    public function operationTotalReceivable($param) {
        $dataArray = array();

        foreach($param as $data) {
            $operation = $data->total_money/$data->total_package * ($data->total_package - $data->total_usage); //operation for receivable not in bank

            array_push($dataArray, $operation);
        }

        $result = array_sum($dataArray);

        return $result;
    }

    public function operationTotalGross($param) {
        $dataArray = array();
        
        foreach($param as $data) {
            $operation = ($data->total_money/$data->total_package) * $data->total_usage;

            array_push($dataArray, $operation);
        }

        $result = array_sum($dataArray);

        return $result;
    }

    public function operationTotalProfit($param) {
        $dataArray = array();
        
        foreach($param as $data) {
            $operationNet = (($data->total_money/$data->total_package) * $data->total_usage) - (($data->total_money/$data->total_package * ($data->percentage/100)) * $data->total_usage);

            array_push($dataArray, $operationNet);
        }

        $result = array_sum($dataArray);

        return $result;
    }

    public function operationTotalSharing($param) {
        $dataArray = array();
        

        foreach($param as $data) {
            $operation = (($data->total_money/$data->total_package) * ($data->percentage/100)) * $data->total_usage;

            array_push($dataArray, $operation);
        }

        $result = array_sum($dataArray);

        return $result;
    }

    public function dashboard() {
        //annualy
        $income = $this->getTotalIncome();
        $receivable = $this->getTotalReceivable();
        $gross = $this->getTotalGross();
        $net = $this->getTotalProfit();
        $sharing = $this->getTotalSharing();

        //monthly
        $incomeMonth = $this->getMonthIncome();
        $receivableMonth = $this->getMonthReceivable();
        $grossMonth = $this->getMonthGross();
        $netMonth = $this->getMonthProfit();
        $sharingMonth = $this->getMonthSharing();


        $sessionInBank = DB::table('package_customers')
            ->select(DB::raw('SUM(total_package) - SUM(total_usage) AS bank'))
            ->first();
        

        return view('admin.revenue.dashboard', compact('income', 'receivable', 'gross', 'net', 'sharing', 'sessionInBank', 'incomeMonth', 'receivableMonth', 'grossMonth', 'netMonth', 'sharingMonth'));
    }
}
