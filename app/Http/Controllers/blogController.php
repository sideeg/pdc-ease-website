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
       $article = blogs::find($id);

       // TODO get realted blogs and service tags
       $tags = tags::where('id',$article->tag_id)->get();
       $related_articles = blogs::select('image','title_en')->where('tag_id',$article->tag_id)->take(3)->get();
        dd($related_articles);
        return view("pages.article", compact('article'));
    }
}
