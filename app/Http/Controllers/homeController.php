<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models;
use App\Models\User;
use App\Notifications\NewMessageNotification;
use App\Notifications\NewOrderNotification;

class homeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function dashboard()
    {
        # code...
            // dd('hello');
            return view('admin-layout.dashboard');
    }

    public function index()
    {

        $slider = Models\slide_bar::all();
        $blogs = Models\blogs::with("tag")->take(3)->get();
        $service = Models\services::all();
        $clint = Models\clints::all();


        // dd($slider);
        return view('index', compact(['slider','blogs', 'service', 'clint'])); //TODO page name
    }

    public function contactForm(Request $request)
    {
        $code = 3;

        $validatedData = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'message' => 'required',
        ]);

        if ($validatedData->fails()) {
            // dd('here');
            return back()->withErrors($validatedData)
                         ->withInput()->with('code',$code);
        }

        $message = new Models\message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        $users = User::where('role_id','1')->get();
        foreach($users as $user){
            $user->notify(new NewMessageNotification($message));
            $temp = $user;
        }


        $code = 2;
        // dd($code);
        return redirect('/')->with('code',$code);


    }

    public function serviceRequest(Request $request)
    {

        // dd($request);
        $code = 0;

        $validatedData = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required',
            'tags' => 'required',
        ]);

        if ($validatedData->fails()) {
            // dd('here');
            return back()->withErrors($validatedData)
                         ->withInput()->with('code',$code);
        }

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

        $users = User::where('role_id','1')->get();
        foreach($users as $user){
            $user->notify(new NewOrderNotification($order));
        }

        $code = 1;
        return redirect('/')->with('code',$code);

    }
}
