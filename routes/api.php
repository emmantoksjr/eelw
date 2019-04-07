<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

//POST URLS
Route::post('/v1/login', 'API\AuthController@Login');
Route::post('/v1/register', 'API\AuthController@register');
Route::post('v1/save','API\AuthController@save');
Route::post('v1/feed_back','API\AuthController@feedback');

//GET URLS
Route::get('/v1/check','API\AuthController@check');
Route::get('/v1/schedules','API\AuthController@schedules');
Route::get('/v1/facilitators','API\AuthController@facilitators');
Route::get('/v1/guests','API\AuthController@guests');
Route::get('/v1/dates', 'API\AuthController@dates');
Route::get('v1/events/{date}','API\AuthController@events');