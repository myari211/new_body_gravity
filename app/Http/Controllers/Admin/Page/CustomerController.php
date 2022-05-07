<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer() {
        return view('admin.customer_dashboard');
    }

    public function customerDetails($id) {
        return view('admin.details', compact("id"));
    }
}
