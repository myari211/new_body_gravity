<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')
            ->where('users.id', Auth::user()->id)
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->select('*', 'roles.name as role_name')
            ->first();

        if($users->role_id == 2) {
            return redirect()->to(route('customer.dashboard', Auth::user()->id));
        }
        elseif($users->role_name == 'trainer') {
            return redirect()->to(url('/')."/trainer/dashboard/".Auth::user()->id);
        }
        elseif($users->role_name == 'admin') {
            return redirect()->to(url('/')."/admin/dashboard/".Auth::user()->id);
        }
        else {
            return redirect()->to(url('/'));
        }

        return view('home');
    }
}
