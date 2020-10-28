<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function serviceRequest(Request $request)
    {
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

        for ($i =0;i<sizeof($request['tags']);$i++){
            $order_tag = new orders_tags();

            $order_tag->order_id = $order->id;
            $order_tag->tag_id = $request['tags'][i];

            $order_tag->save();

        }

        return redirect('/service');

    }

    /***************************
     * 
     * 
     */

     public function tagRequest(Request $request)
     {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required',
            'tag_id' => 'required',
        ]);

        $order = new Models\orders();
        
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;

        $order->save();

        $order_tag = new orders_tags();

        $order_tag->order_id = $order->id;
        $order_tag->tag_id = $request['tag_id'];

        $order_tag->save();
     }
}
