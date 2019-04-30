<?php

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' => ['auth','admin']], function () {

 Route::get('/', 'Admin\DashboardController@index');

  	Route::get('user', 'Admin\UserController@index');
   	Route::get('user/create', 'Admin\UserController@create');
    Route::post('user/store', 'Admin\UserController@store');
    Route::get('user/edit/{id}', 'Admin\UserController@edit');
    Route::post('user/edit', 'Admin\UserController@update');
    Route::delete('user/{id}', 'Admin\UserController@destroy');

    Route::get('team', 'Admin\TeamController@index');
   	Route::get('team/create', 'Admin\TeamController@create');
    Route::post('team/store', 'Admin\TeamController@store');
    Route::get('team/edit/{id}', 'Admin\TeamController@edit');
    Route::post('team/edit', 'Admin\TeamController@update');
    Route::delete('team/{id}', 'Admin\TeamController@destroy');

    Route::get('team_task', 'Admin\TeamTaskController@index');
    Route::get('team_task/create', 'Admin\TeamTaskController@create');
    Route::post('team_task/store', 'Admin\TeamTaskController@store');
    Route::get('team_task/edit/{id}', 'Admin\TeamTaskController@edit');
    Route::post('team_task/edit', 'Admin\TeamTaskController@update');
    Route::delete('team_task/{id}', 'Admin\TeamTaskController@destroy');

    Route::get('washing_plan', 'Admin\WashingPlanController@index');
    Route::get('washing_plan/create', 'Admin\WashingPlanController@create');
    Route::post('washing_plan/store', 'Admin\WashingPlanController@store');
    Route::get('washing_plan/edit/{id}', 'Admin\WashingPlanController@edit');
    Route::post('washing_plan/edit', 'Admin\WashingPlanController@update');
    Route::delete('washing_plan/{id}', 'Admin\WashingPlanController@destroy');


    Route::get('washing_price', 'Admin\WashingPriceController@index');
    Route::get('washing_price/create', 'Admin\WashingPriceController@create');
    Route::post('washing_price/store', 'Admin\WashingPriceController@store');
    Route::get('washing_price/edit/{id}', 'Admin\WashingPriceController@edit');
    Route::post('washing_price/edit', 'Admin\WashingPriceController@update');
    Route::delete('washing_price/{id}', 'Admin\WashingPriceController@destroy');


    Route::post('washing_plan_in/store', 'Admin\WashingPlanInController@store');
    Route::post('washing_plan_in/update/{id}', 'Admin\WashingPlanInController@update');
    Route::delete('washing_plan_in/{id}', 'Admin\WashingPlanInController@destroy');


    Route::get('vehicle_company', 'Admin\VehicleCompanyController@index');
    Route::get('vehicle_company/create', 'Admin\VehicleCompanyController@create');
    Route::post('vehicle_company/store', 'Admin\VehicleCompanyController@store');
    Route::get('vehicle_company/edit/{id}', 'Admin\VehicleCompanyController@edit');
    Route::post('vehicle_company/edit', 'Admin\VehicleCompanyController@update');
    Route::delete('vehicle_company/{id}', 'Admin\VehicleCompanyController@destroy');
 
    Route::get('vehicle_model', 'Admin\VehicleModelController@index');
    Route::get('vehicle_model/create', 'Admin\VehicleModelController@create');
    Route::post('vehicle_model/store', 'Admin\VehicleModelController@store');
    Route::get('vehicle_model/edit/{id}', 'Admin\VehicleModelController@edit');
    Route::post('vehicle_model/edit', 'Admin\VehicleModelController@update');
    Route::delete('vehicle_model/{id}', 'Admin\VehicleModelController@destroy');


    Route::get('vehicle_type', 'Admin\VehicleTypeController@index');
    Route::get('vehicle_type/create', 'Admin\VehicleTypeController@create');
    Route::post('vehicle_type/store', 'Admin\VehicleTypeController@store');
    Route::get('vehicle_type/edit/{id}', 'Admin\VehicleTypeController@edit');
    Route::post('vehicle_type/edit', 'Admin\VehicleTypeController@update');
    Route::delete('vehicle_type/{id}', 'Admin\VehicleTypeController@destroy');



    Route::get('appointment', 'Admin\AppointmentController@index');
    Route::get('appointment/create', 'Admin\AppointmentController@create');
    Route::post('appointment/store', 'Admin\AppointmentController@store');
    Route::get('appointment/edit/{id}', 'Admin\AppointmentController@edit');
    Route::post('appointment/edit', 'Admin\AppointmentController@update');
    Route::delete('appointment/{id}', 'Admin\AppointmentController@destroy');



    Route::get('payment', 'Admin\PaymentController@index');
    // Route::get('payment/create', 'Admin\PaymentController@create');
    // Route::post('payment/store', 'Admin\PaymentController@store');
    Route::get('payment/edit/{id}', 'Admin\PaymentController@edit');
    Route::post('payment/edit', 'Admin\PaymentController@update');
    Route::delete('payment/{id}', 'Admin\PaymentController@destroy');

    Route::get('payment_mode', 'Admin\PaymentModeController@index');
    Route::get('payment_mode/create', 'Admin\PaymentModeController@create');
    Route::post('payment_mode/store', 'Admin\PaymentModeController@store');
    Route::get('payment_mode/edit/{id}', 'Admin\PaymentModeController@edit');
    Route::post('payment_mode/edit', 'Admin\PaymentModeController@update');
    Route::delete('payment_mode/{id}', 'Admin\PaymentModeController@destroy');


    Route::get('status', 'Admin\StatusController@index');
    Route::get('status/create', 'Admin\StatusController@create');
    Route::post('status/store', 'Admin\StatusController@store');
    Route::get('status/edit/{id}', 'Admin\StatusController@edit');
    Route::post('status/edit', 'Admin\StatusController@update');
    Route::delete('status/{id}', 'Admin\StatusController@destroy');

    Route::get('contact', 'Admin\ContactController@index');
    Route::get('contact/create', 'Admin\ContactController@create');
    Route::post('contact/store', 'Admin\ContactController@store');
    Route::get('contact/edit/{id}', 'Admin\ContactController@edit');
    Route::post('contact/edit', 'Admin\ContactController@update');
    Route::delete('contact/{id}', 'Admin\ContactController@destroy');


    Route::get('blog', 'Admin\BlogController@index');
    Route::get('blog/create', 'Admin\BlogController@create');
    Route::post('blog/store', 'Admin\BlogController@store');
    Route::get('blog/edit/{id}', 'Admin\BlogController@edit');
    Route::post('blog/edit', 'Admin\BlogController@update');
    Route::delete('blog/{id}', 'Admin\BlogController@destroy');


    Route::get('client', 'Admin\ClientController@index');
    Route::get('client/create', 'Admin\ClientController@create');
    Route::post('client/store', 'Admin\ClientController@store');
    Route::get('client/edit/{id}', 'Admin\ClientController@edit');
    Route::post('client/edit', 'Admin\ClientController@update');
    Route::delete('client/{id}', 'Admin\ClientController@destroy');

    Route::get('gallery', 'Admin\GalleryController@index');
    Route::post('gallery/store', 'Admin\GalleryController@store');
    Route::post('gallery/update/{id}', 'Admin\GalleryController@update');
    Route::delete('gallery/{id}', 'Admin\GalleryController@destroy');


    Route::get('service', 'Admin\ServiceController@index');
    Route::get('service/create', 'Admin\ServiceController@create');
    Route::post('service/store', 'Admin\ServiceController@store');
    Route::get('service/edit/{id}', 'Admin\ServiceController@edit');
    Route::post('service/edit', 'Admin\ServiceController@update');
    Route::delete('service/{id}', 'Admin\ServiceController@destroy');



    Route::get('testimonial', 'Admin\TestimonialController@index');
    Route::get('testimonial/create', 'Admin\TestimonialController@create');
    Route::post('testimonial/store', 'Admin\TestimonialController@store');
    Route::get('testimonial/edit/{id}', 'Admin\TestimonialController@edit');
    Route::post('testimonial/edit', 'Admin\TestimonialController@update');
    Route::delete('testimonial/{id}', 'Admin\TestimonialController@destroy');

    Route::get('opening_hour', 'Admin\OpeningHourController@index');
    Route::get('opening_hour/create', 'Admin\OpeningHourController@create');
    Route::post('opening_hour/store', 'Admin\OpeningHourController@store');
    Route::get('opening_hour/edit/{id}', 'Admin\OpeningHourController@edit');
    Route::post('opening_hour/edit', 'Admin\OpeningHourController@update');
    Route::delete('opening_hour/{id}', 'Admin\OpeningHourController@destroy');


     Route::get('about_us', 'Admin\AboutUsController@index');
    Route::get('about_us/create', 'Admin\AboutUsController@create');
    Route::post('about_us/store', 'Admin\AboutUsController@store');
    Route::get('about_us/edit/{id}', 'Admin\AboutUsController@edit');
    Route::post('about_us/edit', 'Admin\AboutUsController@update');
    Route::delete('about_us/{id}', 'Admin\AboutUsController@destroy');

    Route::get('company_social', 'Admin\CompanySocialController@index');
    Route::get('company_social/create', 'Admin\CompanySocialController@create');
    Route::post('company_social/store', 'Admin\CompanySocialController@store');
    Route::get('company_social/edit/{id}', 'Admin\CompanySocialController@edit');
    Route::post('company_social/edit', 'Admin\CompanySocialController@update');
    Route::delete('company_social/{id}', 'Admin\CompanySocialController@destroy');

	   });