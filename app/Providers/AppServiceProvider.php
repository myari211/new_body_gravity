<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Supprt\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        RealRashid\SweetAlert\SweetAlertServiceProvider::class;
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
