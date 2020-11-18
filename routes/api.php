<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/slider','App\Http\Controllers\AdminApi\SliderController@sliderSave');
Route::get('/slider','App\Http\Controllers\AdminApi\SliderController@sliders');
Route::put("slider/","App\Http\Controllers\AdminApi\SliderController@sliderUpdate");
Route::get('/slider/{id}','App\Http\Controllers\AdminApi\SliderController@sliderById');
Route::delete("slider/{id}","App\Http\Controllers\AdminApi\SliderController@sliderDelete");



Route::post('/service','App\Http\Controllers\AdminApi\ServiceController@serviceSave');
Route::get('/service','App\Http\Controllers\AdminApi\ServiceController@services');
Route::put("/service","App\Http\Controllers\AdminApi\ServiceController@serviceUpdate");
Route::get('/service/{id}','App\Http\Controllers\AdminApi\ServiceController@serviceById');
Route::delete("/service/{id}","App\Http\Controllers\AdminApi\ServiceController@serviceDelete");



Route::post('/blog','App\Http\Controllers\AdminApi\BlogController@blogSave');
Route::get('/blog','App\Http\Controllers\AdminApi\BlogController@blog');
Route::put("/blog","App\Http\Controllers\AdminApi\BlogController@blogUpdate");
Route::get('/blog/{id}','App\Http\Controllers\AdminApi\BlogController@blogById');
Route::delete("/blog/{id}","App\Http\Controllers\AdminApi\BlogController@blogDelete");


Route::get('/order','App\Http\Controllers\AdminApi\OrderController@order');
Route::put("/order/{id}","App\Http\Controllers\AdminApi\OrderController@orderUpdate");
Route::get('/order/{id}','App\Http\Controllers\AdminApi\OrderController@orderById');
Route::delete("/order/{id}","App\Http\Controllers\AdminApi\OrderController@orderDelete");
