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
        // $blog = blogs::create($request->all());
        $uploads_folder = 'images\svg\blogs\\';//storage_path('app/public/blogs');
        if (!file_exists($uploads_folder)) {
            mkdir($uploads_folder, 0777, true);
        }
        $ext= $request->image->extension();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move($uploads_folder, $imageName);


        $blog = blogs::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'desc_en' => $request->desc_en,
            'desc_ar' => $request->desc_ar,
            'image' => $uploads_folder.$imageName,
            'tag_id' => $request->tag_id,

        ]);



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


            if(!is_null($request->image)){
                $uploads_folder = 'images\svg\blogs\\';//storage_path('app/public/blogs');
                if (!file_exists($uploads_folder)) {
                     mkdir($uploads_folder, 0777, true);
                }

                 $ext= $request->image->extension();

                $imageName = time().'.'.$request->image->extension();
                $request->image->move($uploads_folder, $imageName);

                $blog->image =$uploads_folder.$imageName;

            }

            if (!is_null($request->title_en))
                $blog->title_en = $request->title_en;
            if (!is_null($request->title_ar))
                $blog->title_ar = $request->title_ar;
            if (!is_null($request->desc_en))
                $blog->desc_en = $request->desc_en;
            if (!is_null($request->desc_ar))
                $blog->desc_ar = $request->desc_ar;
            if (!is_null($request->tag_id))
                $blog->tag_id = $request->tag_id;


            // $blog->update($request->all());
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

            return response()->json(blogs::with('tag')->paginate(9),200);
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
