<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;

class blogController extends Controller
{
    public function index()
    {
        // return view('pages.blog');

        //We will use datatable to display data by using index_data function
        // $orders = Order::paginate(10);
        // return view('orders.index', compact('orders'));
        //$blog = json_encode( blog::orderBy('id', 'asc')->select('id','blog_name', 'Brief',"created_at","image")->get());
       $blog = blogs::paginate(5);
        // dd($blog);
        return view('pages.blog', compact('blog')); // TODO view name

    }

    public function blogById( $id)
    {
        // return view('pages.article');

        // dd(json_encode( blog::find($id)));
       $blog = blogs::find($id);

        // dd($blog);
        return view("pages.article", compact('blog'));
    }
}
