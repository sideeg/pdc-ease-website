<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/blog', function () {
//     return view('pages.blog');
// });

// Route::get('/article', function () {
//     return view('pages.article');
// });

// Route::get('/service', function () {
//     return view('pages.service');
// });

// Route::get('/service_order', function () {
//     return view('pages.service-order');
// });

// Route::get('/tag_order', function () {
//     return view('pages.tag-order');
// });

Route::get('/',"App\Http\Controllers\homeController@index")->name('home');
Route::post('/contact',"App\Http\Controllers\homeController@contactForm")->name('contactForm');
Route::post('/service_request',"App\Http\Controllers\homeController@serviceRequest")->name('serviceRequest');


// Route::post("/contact","homeController@message")->name('contact');

Route::get("/service/{id}","App\Http\Controllers\servicesController@serviceById")->name('service');
Route::get("/service_order/{id}","App\Http\Controllers\servicesController@showServiceForm")->name('serviceOrderForm');
Route::get("/tag_order/{id}","App\Http\Controllers\servicesController@showTagForm")->name('showTagForm');


// Route::get("/blog","App\Http\Controllers\blogController@index")->name('blog');
// Route::get("/article/{id}","blogController@blogById")->name('article');

Route::get("/blog","App\Http\Controllers\blogController@index")->name('blog');
Route::get("/blog/{id}","App\Http\Controllers\blogController@blogByTag")->name('blogByTag');
Route::get("/article/{id}","App\Http\Controllers\blogController@blogById")->name('article');

// Route::group(['middleware' => ['role:admin','auth']], function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
