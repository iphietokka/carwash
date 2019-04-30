<?php

 // Auth::routes(['verify' => true]); email verification
 
  Auth::routes(); 

Route::group(['prefix'=>'user', 'middleware' => ['auth','user']], function () {

 Route::get('/', 'User\DashboardController@index');
  // Route::get('/', 'User\DashboardController@index')->middleware('verified'); email verification

   	Route::get('appointment', 'User\AppointmentController@index');
    Route::get('appointment/create', 'User\AppointmentController@create');
    Route::post('appointment/store', 'User\AppointmentController@store');
    Route::get('appointment/edit/{id}', 'User\AppointmentController@edit');
    Route::post('appointment/edit', 'User\AppointmentController@update');
    Route::delete('appointment/{id}', 'User\AppointmentController@destroy');



     	Route::get('profile', 'User\ProfileController@index');
    Route::get('profile/create', 'User\ProfileController@create');
    Route::post('profile/store', 'User\ProfileController@store');
    Route::get('profile/edit/{id}', 'User\ProfileController@edit');
    Route::post('profile/edit', 'User\ProfileController@update');
    Route::delete('profile/{id}', 'User\ProfileController@destroy');

	   });