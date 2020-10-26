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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/article', function () {
    return view('pages.article');
});

Route::get('/service', function () {
    return view('pages.service');
});

// Route::get('/',"App\Http\Controllers\homeController@index")->name('home');
// Route::post("/contact","homeController@message")->name('contact');

// Route::get("/blog","App\Http\Controllers\blogController@index")->name('blog');
// Route::get("/article/{id}","blogController@blogById")->name('article');

Route::get("/blog","App\Http\Controllers\blogController@index")->name('blog');
Route::get("/article/{id}","App\Http\Controllers\blogController@blogById")->name('article');

