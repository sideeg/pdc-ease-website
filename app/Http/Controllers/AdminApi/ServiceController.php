<?php

namespace App\Http\Controllers\AdminApi;

use App\Models\services;
use App\Models\tags;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ServiceController extends Controller
{
    /************************************************************
     *
     * add new service
     *
     */
    public function serviceSave(Request $request)
    {

        $validatedData = Validator::make($request->all(),[
            'image' => 'required',
            'title_en' => 'required',
            'title_ar' => 'required',
            'desc_en' => 'required',
            'desc_ar' => 'required',
        ]);

        if($validatedData->fails()){

            return response()->json('all the filed is  required',400);
        }

        //create new service
        $service = services::create($request->all());

         //check if the given tags list is string or not if it is convert it to array
         if (gettype($request->tags) == "string")
            $tags_list = explode(',', substr($request->tags,1,-1));
        else
            $tags_list = $request->tags;


            //add the new tags to this new service as the user done
        for ($i =0;$i<sizeof($tags_list);$i++){
            $tag = tags::find($tags_list[$i]);
            $tag->services_id = $service->id;
            $tag->save();
        }

        return response()->json($service,201);

    }

    /************************************************************
         *
         * get all service
         *
         */

        public function services(Request $request){

            return response()->json(services::with('tag')->paginate(9),200);
        }

        /****************************************************************
         *
         * get serviceby id
         *
         */
        public function serviceById($id)
        {
            $service = services::with('tag')->find($id);
            if (is_null($service)){
                return response()->json('service not found',404);
            }
            return response()->json($service,200);
        }

        /****************************************************************
         *
         * udate service by id
         *
         */
        public function serviceUpdate(Request $request,services $service)
        {
            // dd($request->id);
            $service = services::find($request->id);

            if (is_null($service)){
                return response()->json('service not found',404);
            }

            //check if the given tags list is string or not if it is convert it to array
            if (gettype($request->tags) == "string")
                $tags_list = explode(',', substr($request->tags,1,-1));
            else
                $tags_list = $request->tags;

            // var_dump($fruits_ar);
            //add the new tags to this new service as the user done
            for ($i =0;$i<sizeof($tags_list);$i++){
                $tag = tags::find($tags_list[$i]);
                $tag->services_id = $service->id;
                $tag->save();
            }


            $service->update($request->all());
            $service->save();
            return response()->json($service,200);
        }

        /******************************************************************
         * delete service
         *
         */
        public function serviceDelete(Request $request,services $service)
        {
            $service->delete($request);
            return response()->json("done",200);

        }
}
