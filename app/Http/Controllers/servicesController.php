<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
use App\Models;



class servicesController extends Controller
{
    //

    public function serviceById($id)
    {
        // dd($id);
        $service = services::where('id',$id)->with("tag")->get();
        $service = $service[0];
        // dd($service->tag);
        return view('pages.service', compact('service'));
    }

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

        for ($i =0;$i<sizeof($request['tags']);$i++){
            $order_tag = new Models\orders_tags();

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

        $order_tag = new Models\orders_tags();

        $order_tag->order_id = $order->id;
        $order_tag->tag_id = $request['tag_id'];

        $order_tag->save();
     }

     /*****************
      *

      */
      public function tagForm( $tag_id)
      {
        return view('pages.form', compact('tag_id')); //TODO page name
      }

      /************************
       *
       *
       */
      public function showServiceForm($service_id)
      {
        //   dd($service_id);
        $service_tags = Models\tags::where('services_id',$service_id)->get();

        return view('pages.service-order', compact('service_tags')); //TODO page name

    }

    public function showTagForm($tag_id)
      {
        //   dd($service_id);
        // $service_tags = Models\tags::where('services_id',$service_id)->get();

        return view('pages.tag-order', compact('tag_id')); //TODO page name

    }
}
