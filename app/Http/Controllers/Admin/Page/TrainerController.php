<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TrainerController extends Controller
{
    public function trainer() {
        $trainer_count = DB::table('users')
            ->leftJoin('model_has_roles', function ($join) {
                $join->on("model_has_roles.model_id", '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('model_has_roles.role_id', '=', 'roles.id');
            }) 
            ->where(function($query) {
                $query->where('roles.name', 'trainer');
            })
            ->count();

        return view('admin.trainer', compact('trainer_count'));
    }

    public function performance() {
        return view('admin.performance');
    }

    public function trainerAccount() {
        return view('admin.trainer_account');
    }

    public function trainerDetails($id) {
        $trainer = DB::table('users')
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->where('users.id', $id)
            ->first();

        $hours = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
            })
            ->count();

        $hours_month = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
                $query->where('updated_at', Carbon::now()->month);
            })
            ->count();

        $attendances = DB::table('attendances')
            ->where(function($query) use ($id) {
                $query->where('trainer_id', $id);
                $query->where('status', 'done');
            })
            ->get();

        return view('admin.trainer_details', compact('trainer', 'hours', 'hours_month', 'attendances'));
    }
}
