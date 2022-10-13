<?php

namespace App\Http\Controllers\Customer\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard($id) {

        $attendances = DB::table('attendances')
            ->where('customer_id', $id)
            ->where('status', 'done')
            ->orderBy('updated_at', 'DESC')
            ->get();

        return view('customer.dashboard', compact('attendances'));
    }
}
