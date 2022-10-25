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
        Route::get('/admin/dashboard/{id}', 'Admin\Page\CustomerController@dashboard')->name('admin.dashboard');

        // return view('admin.dashboard');

        //customer
        Route::get('/admin/customer', 'Admin\Page\CustomerController@customer')->name('admin.customer');
        Route::get('/admin/customer/{id}', 'Admin\Page\CustomerController@customerDetails')->name('admin.customer.details');

        //trainer
        Route::get('/admin/trainer', 'Admin\Page\TrainerController@trainer')->name('admin.trainer');
        Route::get('/admin/trainer/details/{id}', 'Admin\Page\TrainerController@trainerDetails')->name('trainer_details');
    //api
        //dashboard
        Route::get('/admin/api/dashboard', 'Admin\Api\ApiController@dashboard')->name('admin.dashboard.api');
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
        // Route::get('/trainer/dashboard/{id}', function() {
        //     return view('trainer.dashboard');
        // })->name('trainer.dashboard');
        Route::get('/trainer/dashboard/{id}', 'Trainer\PageController@index')->name('trainer.dashboard');
        Route::get('/trainer/barcode/{id}', 'Trainer\PageController@barcode')->name('trainer.barcode');
        Route::get('/trainer/customers/{id}', 'Trainer\PageController@customer')->name('trainer.customer');
        Route::get('/trainer/attendances/{id}', 'Trainer\PageController@attendances')->name('trainer.attendances');
        Route::get('/trainer/profile/{id}', 'Trainer\PageController@profile')->name('trainer.profile');
    //api
    Route::get('/trainer/{id}', 'Trainer\ApiController@dashboard');

    //barcode
    Route::get('/trainer/barcode/initial/{package_id}/{customer_id}/{trainer_id}', 'Trainer\ApiController@getBarcode')->name('getQR');
    Route::get('/trainer/barcode/{package_id}/{customer_id}/{user_id}', 'Trainer\ApiController@getBarcode')->name('getQRImage');
    // Route::post('/trainer/barcode/{customer_id}/{trainer_id}/{package_id}', 'Trainer\ApiController@getBarcode')->name('postQR');
    
    //initial_barcode
    Route::post('/trainer/barcode/initial/{package_id}/{customer_id}/{trainer_id}', 'Trainer\ApiController@initialBarcode')->name('name.initial_barcode');
    //update_token
    Route::post('/trainer/barcode/initial/token/{package_id}/{customer_id}/{trainer_id}', 'Trainer\ApiController@updateToken')->name('name.updateToken');




    //test_barcode
    Route::get('/trainer/attendance/{id}', 'Trainer\ApiController@attendaces')->name('attendaces');
});


//customer
Route::middleware('role:customer')->group(function() {
    //page
        Route::get('/customer/dashboard/{id}', 'Customer\Page\DashboardController@dashboard')->name('customer.dashboard');
        Route::get('/customer/attendances/{id}', 'Customer\Page\AttendancesController@index')->name('customer.attendances');
        Route::get('/customer/package/{id}', 'Customer\Page\AttendancesController@package')->name('customer.package');
        Route::get('/customer/profile/{id}', 'Customer\Page\AttendancesController@profile')->name('customer.profile');
        // Route::get('/customer/dashboard/{id}', function() {
        //     return view('customer.dashboard');
        // })->name('customer.dashboard');
    //api
        //dashboard
        Route::get('/customer/api/dashboard/{id}', 'Customer\Api\ApiController@dashboard')->name('customers.dashboard');

        //attendances_details
        Route::get('/customer/api/attendances/{id}', 'Customer\Api\ApiController@attendances_details')->name('customers.attendances.details');
});


Route::post('/api/test/{id}', 'Admin\Api\CustomerController@customer_add_package');
Route::get('/api/test/{id}', 'Admin\Api\CustomerController@customer_details');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/csrf', function() {
    return csrf_token();
});
