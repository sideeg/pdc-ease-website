<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide_bar;
use App\Models\orders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Validator;



class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $messagesCounts=\DB::table('messages')
        ->select(\DB::raw('sum(id) as total'),\DB::raw('date(created_at) as dates'))
        ->groupBy('dates')
        ->orderBy('dates','desc')
       ->take(12)->get();

       $array = array();

       for($i=0;$i<sizeof($messagesCounts);$i++)
            $array[]=$messagesCounts[$i]->total;

        $orderCounts=\DB::table('orders')
        ->select(\DB::raw('sum(id) as total'),\DB::raw('date(created_at) as dates'))
        ->groupBy('dates')
        ->orderBy('dates','desc')
        ->take(12)->get();

        $array2 = array();

        for($i=0;$i<sizeof($orderCounts);$i++)
            $array2[]=$orderCounts[$i]->total;

        return view('admin-layout.dashboard',compact(['array','array2']));
    }

    public function slider()
    {
        return view('admin-layout.pages.slider');
    }

    public function blog()
    {
        return view('admin-layout.pages.blog');
    }

    public function servicesOrders()
    {
        return view('admin-layout.pages.service-order');
    }

    public function service()
    {
        return view('admin-layout.pages.service');
    }

    public function message()
    {
        return view('admin-layout.pages.message');
    }

    public function tag()
    {
        return view('admin-layout.pages.tag');
    }

    public function client()
    {
        return view('admin-layout.pages.client');
    }

    public function admin()
    {
        return view('admin-layout.pages.admin');
    }


    public function sliderSave(Request $request)
    {
        // echo($request->file('sourse'));
        $validatedData = Validator::make($request->all(),[
            'sourse' => 'required|mimes:jpeg,bmp,png,jpg,avi,wmv,flv,gif,asf,m4v,mp4,m4p|max:2048',
        ]);
        // dd($request);
        if(filesize($request->file('sourse'))>2e+6){
            // dd('size issue');

          }else{
        if($validatedData->fails()){

            return response()->json('the sourse file is required',400);
        }

        $slide_bar = slide_bar::create($request->all());
        $image_list = ['jpeg','bmp','png','jpg'];
        $video_list = ['avi','wmv','flv','gif','asf','m4v','mp4','m4p'];

        //check the source to detect is it image or video
        if (in_array ($request->file('sourse')->getClientOriginalExtension(), $image_list)){
            $slide_bar->forceFill([
                'type' => 0,// type is image
            ]);
        }
        else if(in_array ($request->file('sourse')->getClientOriginalExtension(),$video_list)){
            $slide_bar->forceFill([
                'type' => 1,//type is video
            ]);


        }

        //resive the source and store ir in database
        $image_name = md5($slide_bar->id."app".$slide_bar->id . rand(1,1000));

        $image_ext = $request->file('sourse')->getClientOriginalExtension(); // example: png, jpg ... etc

        $image_full_name = $image_name . '.' . $image_ext;

        $uploads_folder =  getcwd() .'/images/';

        if (!file_exists($uploads_folder)) {
            mkdir($uploads_folder, 0777, true);
        }


        $request->file('sourse')->move($uploads_folder, $image_name  . '.' . $image_ext);


       $slide_bar->{'sourse'} =  $image_full_name;

       //save the new slide bar
        $slide_bar->save();
            // dd('stored');

            }
        }



}
