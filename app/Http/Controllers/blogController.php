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

       $article = blogs::find($id);
        // var_dump($article);
       $current_tag = tags::where('id',$article->tag_id)->first();
        // dd($current_tag->service_id);
       $related_tags = tags::where('service_id',$current_tag->service_id)->get();
       $related_articles = blogs::select('image','title_en')->where('tag_id',$article->tag_id)->take(3)->get();
        // dd($related_tags);
        return view("pages.article", compact('article','related_tags','related_articles'));
    }
}
