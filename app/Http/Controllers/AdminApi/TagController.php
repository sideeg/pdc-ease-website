<?php

namespace App\Http\Controllers\AdminApi;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tags;

class TagController extends Controller
{

     /************************************************************
     *
     * add new tag
     *
     */
    public function tagSave(Request $request)
    {
        // dd($request->header('remember_token'));
        $validatedData = Validator::make($request->all(),[
            'name_en' => 'required',
            'name_ar' => 'required',
            'desc_en' => 'required',
            'desc_ar' => 'required',
            'service_id' => 'required',

        ]);

        if($validatedData->fails()){

            return response()->json('all the filed is  required',400);
        }

        //create new tag
        $tag = tags::create($request->all());



        return response()->json($tag,201);

    }

    /************************************************************
         *
         * get all tag
         *
         */

        public function tags(Request $request){

            return response()->json(tags::paginate(9),200);
        }

         /************************************************************
         *
         * get all tag names
         *
         */

        public function tags_names(Request $request){
            // return response()->json(["code" => 1, "data" => tags::select('name_en', 'name_ar', 'id')->get()], 200);
            // dd(tags::select('name_en','id')->get());
            return response()->json(tags::select('name_en','id')->get(),200);
        }



        /****************************************************************
         *
         * get tag by id
         *
         */
        public function tagById($id)
        {
            $tag = tags::find($id);
            if (is_null($tag)){
                return response()->json('tag not found',404);
            }
            return response()->json($tag,200);
        }


     /******************************************************************
         * delete tag
         *
         */
        public function tagDelete($id)
        {
            $tag = tags::find($id);
            if (is_null($tag)){
                return response()->json('tag not found',404);
            }
            $tag->delete($id);
            return response()->json("done",200);

        }



     /****************************************************************
         *
         * update tag by id
         *
         */
        public function tagUpdate(Request $request,tags $tag)
        {
            // dd($request->all());
            $tag = tags::find($request->id);

            if (is_null($tag)){
                return response()->json('tag not found',404);
            }



            $tag->update($request->all());
            $tag->save();
            return response()->json($tag,200);
        }

}
