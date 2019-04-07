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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/', 'HomeController@index')->middleware('auth');

//Auth
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::get('/auth/logout', 'Auth\LoginController@logout');
Route::get('/auth/setup', 'PagesController@setup');
Route::get('/forgotpass', 'Auth\ResetPasswordController@showResetForm');
Route::post('/auth/register', 'Auth\RegisterController@Register');
Route::post('/auth/login', 'Auth\LoginController@login');

//Facilitators
Route::get('/facilitator/create', 'FacilitatorController@create')->middleware('auth');
Route::get('/facilitator/view','FacilitatorController@view')->middleware('auth');
Route::get('/facilitator/edit/{id}', 'FacilitatorController@edit')->middleware('auth');
Route::post('/facilitator/create', 'FacilitatorController@add')->middleware('auth');
Route::post('/facilitator/edit/{id}', 'FacilitatorController@update')->middleware('auth');

//Guests
Route::get('/guest/create', 'GuestController@create')->middleware('auth');
Route::get('/guest/view','GuestController@view')->middleware('auth');
Route::get('/guest/edit/{id}', 'GuestController@edit')->middleware('auth');
Route::post('/guest/create', 'GuestController@add')->middleware('auth');
Route::post('/guest/edit/{id}', 'GuestController@update')->middleware('auth');

//Schedule
Route::get('/schedule/create', 'ScheduleController@create')->middleware('auth');
Route::get('/schedule/view','ScheduleController@view')->middleware('auth');
Route::get('/schedule/edit/{id}', 'ScheduleController@edit')->middleware('auth');
Route::post('/schedule/create', 'ScheduleController@add')->middleware('auth');
Route::post('/schedule/edit/{id}', 'ScheduleController@update')->middleware('auth');

//Feedback
Route::get('/feedback/view', 'API\AuthController@view_feedback')->middleware('auth');

//students
Route::get('/student/view','StudentController@view')->middleware('auth');

//Dates
Route::get('/date/create','DateController@create')->middleware('auth');
Route::get('/date/view','DateController@view')->middleware('auth');
Route::get('/date/edit/{id}', 'DateController@edit')->middleware('auth');
Route::post('/date/create', 'DateController@add')->middleware('auth');
Route::post('/date/edit/{id}', 'DateController@update')->middleware('auth');