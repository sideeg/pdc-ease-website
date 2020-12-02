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

// Route::group(['middleware' => ['role:admin']], function () {

Route::get('/user-notification-num','App\Http\Controllers\AdminApi\UserController@orderNotficationNum');
Route::get('/user-notification','App\Http\Controllers\AdminApi\UserController@notfication');
Route::get('/user-message-num','App\Http\Controllers\AdminApi\UserController@messageNotficationNum');
Route::get('/user-message','App\Http\Controllers\AdminApi\UserController@message');



/******************************** super Admin access *************************************** */
// Route::group(['middleware' => 'super_admin_api_auth'], function () {

Route::post('/user','App\Http\Controllers\AdminApi\UserController@UserSave');
Route::get('/user','App\Http\Controllers\AdminApi\UserController@Users');
Route::put("/user","App\Http\Controllers\AdminApi\UserController@UserUpdate");
Route::get('/user/{id}','App\Http\Controllers\AdminApi\UserController@UserById');
Route::delete("/user/{id}","App\Http\Controllers\AdminApi\UserController@UserDelete");

Route::get('/order','App\Http\Controllers\AdminApi\OrderController@order')->middleware('super_admin_api_auth');
Route::get('/order-reverse','App\Http\Controllers\AdminApi\OrderController@orderreverse');
Route::put("/order/{id}","App\Http\Controllers\AdminApi\OrderController@orderUpdate");
Route::get('/order/{id}','App\Http\Controllers\AdminApi\OrderController@orderById');
Route::delete("/order/{id}","App\Http\Controllers\AdminApi\OrderController@orderDelete");


Route::get('/message','App\Http\Controllers\AdminApi\MessageController@messages');
Route::get('/message/{id}','App\Http\Controllers\AdminApi\MessageController@messageById');
Route::delete("/message/{id}","App\Http\Controllers\AdminApi\MessageController@messageDelete");




Route::get('/role','App\Http\Controllers\AdminApi\roleController@roles');
Route::get('/role/{id}','App\Http\Controllers\AdminApi\roleController@roleById');
Route::delete("/role/{id}","App\Http\Controllers\AdminApi\roleController@roleDelete");

// });
/*********************************** end super admin access ******************************************** */

/************************************** blogger access *****************************************************/
// Route::group(['middleware' => 'bloger_api_auth'], function () {

Route::post('/blog','App\Http\Controllers\AdminApi\BlogController@blogSave');
Route::get('/blog','App\Http\Controllers\AdminApi\BlogController@blog');
Route::put("/blog","App\Http\Controllers\AdminApi\BlogController@blogUpdate");
Route::get('/blog/{id}','App\Http\Controllers\AdminApi\BlogController@blogById');
Route::delete("/blog/{id}","App\Http\Controllers\AdminApi\BlogController@blogDelete");

// });

/*************************************************************end blogger access *********************** */

/************************************** admin access *****************************************************/
// Route::group(['middleware' => 'admin_api_auth'], function () {
Route::post('/clint','App\Http\Controllers\AdminApi\clintController@clintSave');
Route::get('/clint','App\Http\Controllers\AdminApi\clintController@clint');
Route::put("/clint","App\Http\Controllers\AdminApi\clintController@clintUpdate");
Route::get('/clint/{id}','App\Http\Controllers\AdminApi\clintController@clintById');
Route::delete("/clint/{id}","App\Http\Controllers\AdminApi\clintController@clintDelete");



Route::get('/tag','App\Http\Controllers\AdminApi\TagController@tags');
Route::get('/tag-names','App\Http\Controllers\AdminApi\TagController@tags_names');
Route::post('/tag','App\Http\Controllers\AdminApi\TagController@tagSave');
Route::put("/tag","App\Http\Controllers\AdminApi\TagController@tagUpdate");
Route::get('/tag/{id}','App\Http\Controllers\AdminApi\TagController@tagById');
Route::delete("/tag/{id}","App\Http\Controllers\AdminApi\TagController@tagDelete");


Route::post('/slider','App\Http\Controllers\AdminApi\SliderController@storeSlider');
Route::get('/slider','App\Http\Controllers\AdminApi\SliderController@sliders');
Route::put("slider/","App\Http\Controllers\AdminApi\SliderController@sliderUpdate");
Route::get('/slider/{id}','App\Http\Controllers\AdminApi\SliderController@sliderById');
Route::delete("slider/{id}","App\Http\Controllers\AdminApi\SliderController@sliderDelete");



Route::post('/service','App\Http\Controllers\AdminApi\ServiceController@serviceSave');
Route::get('/service','App\Http\Controllers\AdminApi\ServiceController@services');
Route::get('/services_names','App\Http\Controllers\AdminApi\ServiceController@servicesnames');

Route::put("/service","App\Http\Controllers\AdminApi\ServiceController@serviceUpdate");
Route::get('/service/{id}','App\Http\Controllers\AdminApi\ServiceController@serviceById');
Route::delete("/service/{id}","App\Http\Controllers\AdminApi\ServiceController@serviceDelete");

// });
/*******************************end admin access *************************************************** */
