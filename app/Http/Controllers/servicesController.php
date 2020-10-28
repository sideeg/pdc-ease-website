<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;


class servicesController extends Controller
{
    //

    public function serviceById($id)
    {
        // dd('here');
        $service = services::find($id)->with("tag")->first();
        // dd($service);
        return view('pages.service', compact('service'));
    }

}
