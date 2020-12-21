<?php

namespace App\Http\Controllers\AdminApi;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slide_bar;

class SliderController extends Controller
{

    public function storeSlider(Request $request){
        $request->validate([
            'sourse' => 'required|mimes:jpeg,bmp,png,jpg,avi,wmv,flv,gif,asf,m4v,mp4,m4p',
            // 'image' => 'required|mimes:jpeg,bmp,png,jpg,avi,wmv,flv,gif,asf,m4v,mp4,m4p|max:2048',
        ]);

        // Initiatl Type Value is Set to Image
        $type = 0;
        $ext= $request->sourse->extension();

        $uploads_folder = 'images\svg\slider\\' ;//storage_path('app/public/sliders');
        if (!file_exists($uploads_folder)) {
            mkdir($uploads_folder, 0777, true);
        }

        $imageName = time().'.'.$request->sourse->extension();
        $request->sourse->move($uploads_folder, $imageName);

        // List of Possible Extentions
        $images_list = ["jpeg","bmp","png","jpg"];
        $videos_list = ["avi","wmv","flv","gif","asf","m4v","mp4","m4p"];

        //check the source to detect is it image or video
        if (in_array ($ext, $images_list)){
            $type = 0 ;// type is image
        } else if (in_array ($ext, $videos_list)){
            $type = 1 ;// type is video
        }


        $slider = slide_bar::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'desc_en' => $request->desc_en,
            'desc_ar' => $request->desc_ar,
            'type' => $type,
            'sourse' => $uploads_folder.$imageName,
        ]);
            $slider->save();
            return response()->json($slider,201);
    }




    /************************************************************
     *
     * get all slider
     *
     */

    public function sliders(Request $request){
        // dd($request->header('remember_token', 'default'));
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
    public function sliderUpdate(Request $request)
    {
        // dd($request->all());
        $slider = slide_bar::find($request->id);

        if (is_null($slider)){
            return response()->json('slider not found',404);
        }
// dd(gettype($request->sourse)."    ".gettype("string"));
        if(!is_null($request->sourse) && !(gettype($request->sourse) === gettype("string"))){
            $uploads_folder = 'images\svg\slider\\';//storage_path('app/public/slider');
            if (!file_exists($uploads_folder)) {
                 mkdir($uploads_folder, 0777, true);
            }

             $ext= $request->sourse->extension();

            $sourseName = time().'.'.$request->sourse->extension();
            $request->sourse->move($uploads_folder, $sourseName);

            $slider->sourse =$uploads_folder.$sourseName;

             // List of Possible Extentions
            $images_list = ["jpeg","bmp","png","jpg"];
            $videos_list = ["avi","wmv","flv","gif","asf","m4v","mp4","m4p"];

            //check the source to detect is it image or video
            if (in_array ($ext, $images_list)){
                $type = 0 ;// type is image
             } else if (in_array ($ext, $videos_list)){
                $type = 1 ;// type is video
            }


        }

        if (!is_null($request->title_en))
            $slider->title_en = $request->title_en;
        if (!is_null($request->title_ar))
            $slider->title_ar = $request->title_ar;
        if (!is_null($request->desc_en))
            $slider->desc_en = $request->desc_en;
        if (!is_null($request->desc_ar))
            $slider->desc_ar = $request->desc_ar;




        // $slider->update($request->all());
        $slider->save();
        return response()->json($slider,200);
    }

        /******************************************************************
         * delete slider
         *
         */
        public function sliderDelete($id)
        {
            // dd($request);
            $slider = slide_bar::find($id);
            if (is_null($slider)){
                return response()->json('slider not found',404);
            }
            $slider->delete($id);
            return response()->json("done",200);

        }

}
