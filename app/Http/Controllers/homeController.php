<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class homeController extends Controller
{
    public function index()
    {
        // $slider = Models\slide_bar::all();
        $blogs = Models\blogs::with("tag")->take(3)->get();
        $service = Models\services::all();
        $clint = Models\clints::all();


        dd($clint);
        return view('pages.home', compact('slider')); //TODO page name
    }
}
