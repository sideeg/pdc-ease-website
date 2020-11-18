<?php

namespace App\Http\Controllers\AdminApi;

use App\Models\blogs;
use App\Models\tags;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{

    /************************************************************
     *
     * add new blog
     *
     */
    public function blogSave(Request $request)
    {

        $validatedData = Validator::make($request->all(),[
            'image' => 'required',
            'title_en' => 'required',
            'title_ar' => 'required',
            'desc_en' => 'required',
            'desc_ar' => 'required',
            'tag_id' => 'required',

        ]);

        if($validatedData->fails()){

            return response()->json('all the filed is  required',400);
        }

        //create new blog
        $blog = blogs::create($request->all());



        return response()->json($blog,201);

    }

     /****************************************************************
         *
         * update blog by id
         *
         */
        public function blogUpdate(Request $request,blogs $blog)
        {
            // dd($request->id);
            $blog = blogs::find($request->id);

            if (is_null($blog)){
                return response()->json('blog not found',404);
            }



            $blog->update($request->all());
            $blog->save();
            return response()->json($blog,200);
        }

         /****************************************************************
         *
         * get blog by id
         *
         */
        public function blogById($id)
        {
            $blog = blogs::find($id);
            if (is_null($blog)){
                return response()->json('blog not found',404);
            }
            return response()->json($blog,200);
        }


    /************************************************************
         *
         * get all blog
         *
         */

        public function blog(Request $request){

            return response()->json(blogs::get(),200);
        }


        /******************************************************************
         * delete blog
         *
         */
        public function blogDelete(Request $request,$id)
        {
            $blog = blogs::find($id);
            if (is_null($blog)){
                return response()->json('blog not found',404);
            }

            $blog->delete($request);
            return response()->json("done",200);

        }

}
