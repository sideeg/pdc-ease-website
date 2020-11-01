<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
use App\Models\tags;


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
        
       $blog = blogs::paginate(10);
        // dd($blog);
        return view('pages.blog', compact('blog')); // TODO view name

    }

    public function blogById( $id)
    {

       $article = blogs::find($id);
        // var_dump($article);
       $current_tag = tags::where('id',$article->tag_id)->first();
        // dd($current_tag->service_id);
       $related_tags = tags::where('services_id',$current_tag->service_id)->get();
    //    dd($related_tags);
       $related_articles = blogs::select('image','title_en')->where('tag_id',$article->tag_id)->take(3)->get();
        // dd($related_tags);
        return view("pages.article", compact('article','related_tags','related_articles'));
    }
}
