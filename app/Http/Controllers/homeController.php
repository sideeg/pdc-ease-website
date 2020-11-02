<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class homeController extends Controller
{
    public function index()
    {

        $slider = Models\slide_bar::all();
        $blogs = Models\blogs::with("tag")->take(3)->get();
        $service = Models\services::all();
        $clint = Models\clints::all();


        // dd($clint);
        return view('index', compact(['slider','blogs', 'service', 'clint'])); //TODO page name
    }

    public function contactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'message' => 'required',
        ]);
        $message = new Models\message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return redirect('/');


    }

    public function serviceRequest(Request $request)
    {

        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required',
            'tags' => 'required',
        ]);

        $order = new Models\orders();

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;

        $order->save();

        if(is_array($request['tags'])){
            for ($i =0;$i < sizeof($request['tags']);$i++){
                $order_tag = new Models\orders_tags();

                $order_tag->order_id = $order->id;
                $order_tag->tag_id = $request['tags'][$i];

                $order_tag->save();

            }
        }else{
                $order_tag = new Models\orders_tags();

                $order_tag->order_id = $order->id;
                $order_tag->tag_id = $request['tags'];

                $order_tag->save();
        }

        return redirect('/');

    }
}
