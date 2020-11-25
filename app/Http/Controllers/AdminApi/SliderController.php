<?php

namespace App\Http\Controllers\AdminApi;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slide_bar;

class SliderController extends Controller
{
    public function sliderSave(Request $request)
    {
        // dd($request->file('sourse'));
        $validatedData = Validator::make($request->all(),[
            'sourse' => 'required|mimes:jpeg,bmp,png,jpg,avi,wmv,flv,gif,asf,m4v,mp4,m4p|max:2048',
        ]);
        
        if(filesize($request->file('sourse'))>2e+6){
            return response()->json("the sourse(image or video) is too big", 401);
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
        return response(201);

            }
        }

        /************************************************************
         *
         * get all slider
         *
         */

        public function sliders(Request $request){

            return response()->json(slide_bar::paginate(9),200);
            // return json_encode(slide_bar::paginate(9));
        }

        /****************************************************************
         *
         * get slide by id
         *
         */
        public function sliderById($id)
        {
            $slider = slide_bar::find($id);
            if (is_null($slider)){
                return response()->json('slider not found',404);
            }
            return response()->json($slider,200);
        }

        /****************************************************************
         *
         * udate slider by id
         *
         */
        public function sliderUpdate(Request $request,slide_bar $slider)
        {
            // dd($request->id);
            $slider = slide_bar::find($request->id);
            $slider->update($request->all());
            $slider->save();
            return response()->json($slider,200);
        }

        /******************************************************************
         * delete slider
         *
         */
        public function sliderDelete($id)
        {
            $slider = slide_bar::find($id);
            if (is_null($slider)){
                return response()->json('slider not found',404);
            }
            $slider->delete($id);
            return response()->json("done",200);

        }

}
