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
}
