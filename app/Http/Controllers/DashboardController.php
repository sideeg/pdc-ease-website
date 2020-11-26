<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {
        # code...
            // dd('hello');

    }

    public function index()
    {
        return view('admin-layout.dashboard');
        // dd($slider);
        // return view('index', compact(['slider','blogs', 'service', 'clint'])); //TODO page name
    }

    public function slider()
    {
        return view('admin-layout.pages.slider');
    }

    public function blog()
    {
        return view('admin-layout.pages.blog');
    }

    public function servicesOrders()
    {
        return view('admin-layout.pages.service-order');
    }

    public function message()
    {
        return view('admin-layout.pages.message');
    }
    
    public function tag()
    {
        return view('admin-layout.pages.tag');
    }
    

}
