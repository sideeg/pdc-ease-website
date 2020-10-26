<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
use App\Models\tags;


class blogController extends Controller
{
    public function index()
    {
        
       $blog = blogs::paginate(10);
        dd($blog);
        return view('pages.blog', compact('blog')); // TODO view name

    }

    public function blogById( $id)
    {
       
        // dd(json_encode( blog::find($id)));
       $blog = blogs::find($id);
       // TODO get realted blogs and service tags
       $tags = tags::all();

        dd($tags);
        return view("pages.article", compact('blog'));
    }
}
