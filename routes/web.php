<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Guest\GuestController@index')->name('home');
Route::get('/about', 'Guest\GuestController@about')->name('about');
Route::get('/program', 'Guest\GuestController@program')->name('program');
Route::get('/contact', 'Guest\GuestController@contact')->name('contact');

// testimonial
Route::get('/testimonial', 'Guest\GuestController@testimonial')->name('testimonial');
Route::post('/testimonial', 'Guest\GuestController@testimonial_post')->name('testimonial_post');

Auth::routes();

//admin
Route::middleware('role:admin')->group(function() {
    //page
        Route::get('/admin/dashboard/{id}', function() {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        //customer
        Route::get('/admin/customer', 'Admin\Page\CustomerController@customer')->name('admin.customer');
        Route::get('/admin/customer/{id}', 'Admin\Page\CustomerController@customerDetails')->name('admin.customer.details');

        //trainer
        Route::get('/admin/trainer', 'Admin\Page\TrainerController@trainer')->name('admin.trainer');
    //api
        // customer
        Route::get('/admin/api/customer', 'Admin\Api\CustomerController@customer')->name('admin.api.customer');
        Route::post('/admin/api/customer/create', 'Admin\Api\CustomerController@customerCreate')->name('admin.api.customer.create');

        Route::get('/admin/api/customer/details/{id}', 'Admin\Api\CustomerController@customer_details')->name('admin.api.customer.details');

        //customer package
        Route::post('/admin/api/customer/add/package/{id}', 'Admin\Api\CustomerController@customer_add_package')->name('admin.api.customer.add.package');
        
        //customer_add_trainer
        Route::post('/admin/api/customer/add/trainer/{id}', 'Admin\Api\CustomerController@add_trainer')->name('admin.api.customer.add_trainer');


        //trainer
        Route::get('/admin/api/trainer', 'Admin\Api\TrainerController@trainer')->name('admin.api.trainer');
        Route::post('/admin/api/trainer/create', 'Admin\Api\TrainerController@trainerCreate')->name('admin.api.trainer.create');
    });

//trainer
Route::middleware('role:trainer')->group(function() {
    //page
        Route::get('/trainer/dashboard/{id}', function() {
            return view('trainer.dashboard');
        })->name('trainer.dashboard');
    //api
    Route::get('/trainer/{id}', 'Trainer\ApiController@dashboard');
});


//customer
Route::middleware('role:customer')->group(function() {
    //page
        Route::get('/customer/dashboard/{id}', function() {
            return view('customer.dashboard');
        })->name('customer.dashboard');
    //api
});


Route::post('/api/test/{id}', 'Admin\Api\CustomerController@customer_add_package');
Route::get('/api/test/{id}', 'Admin\Api\CustomerController@customer_details');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/csrf', function() {
    return csrf_token();
});
