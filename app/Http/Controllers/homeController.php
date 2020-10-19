<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class homeController extends Controller
{
    public function index()
    {
        $slider = Models\slide_bar::all();
        $blogs = Models\blogs::with("tag")->all()->take(3)->get();
        $service = Models\services::all()->get();


        dd($blogs);
        return view('pages.home', compact('slider')); //TODO page name
    }
}
