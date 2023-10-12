<?php

namespace App\Traits;
use Illuminate\Support\Facades\DB;


trait UserTraits {
    public function getUser() {
        $user = DB::table('users')
            ->get();

        return $user;
    }

    public function getUserAllPersonalInformation() {
        $user = DB::table('users')
            ->leftJoin('personal_information_users', function($join) {
                $join->on('personal_information_users.user_id', '=', 'users.id');
            })
            ->leftJoin('model_has_roles', function($join) {
                $join->on('model_has_roles.model_id', '=', 'users.id');
            })
            ->leftJoin('roles', function($join) {
                $join->on('roles.id', '=', 'model_has_roles.role_id');
            })
            ->leftJoin('personal_users', function($join) {
                $join->on('personal_users.user_id', '=', 'users.id');
            })
            ->where('roles.name', 'customer')
            ->get();

        return $user;
    }
}