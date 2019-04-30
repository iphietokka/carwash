<?php


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
 //    return view('welcome');
 // });

Route::get('/','HomePageController@index');
Route::post('/store','HomePageController@store');
Route::post('/subscribe', 'HomePageController@subscribe');
Route::get('/service_detail/{id}', 'HomePageController@service_detail');


 Auth::routes();

Route::get('/home', function(){
	return redirect('/');
});
// Route::get('password/reset', [ 'as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showResetPassword']);
// Route::post('password/reset', ['as'=>'password.request', 'uses'=>'Auth\ResetPasswordController@reset']);
// Route::get('password/reset{token}', [ 'as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);

// Route::post('subscribe', 'MailChimpController@store');
// Route::post('subscribe', 'HomePageController@mailError');

Route::get('/contact', 'ContactMailController@index');
Route::post('/contact/send', 'ContactMailController@send');

// Route::get('/team', function(){
//   $company_socials = Company_social::all();
//   $services = Service::all();
//   $opening_hours = Opening_hour::all();
//   $contacts = Contact::all();
//   $teams = Team::all();
//   $socials = Social_team::with('teams')->get();
//   return view('team', compact('company_socials', 'services', 'opening_hours', 'contacts', 'teams', 'socials'));
// });

Route::get('/team', 'TeamController@index');
Route::get('/team_detail/{id}', 'TeamController@team_detail');

Route::get('/team', 'TeamController@index');




