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
        // $service = services::create($request->all());
        $ext= $request->image->extension();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(storage_path('app/public/sliders'), $imageName);

        $service = services::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'desc_en' => $request->desc_en,
            'desc_ar' => $request->desc_ar,
            'image' => $imageName,
        ]);

         //check if the given tags list is string or not if it is convert it to array
         if (gettype($request->tags) == "string")
            $tags_list = explode(',', substr($request->tags,1,-1));
        else
            $tags_list = $request->tags;


            //add the new tags to this new service as the user done
        for ($i =0;$i<sizeof($tags_list);$i++){
            $tag = tags::find($tags_list[$i]);
            $tag->service_id = $service->id;
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


    /************************************************************
         *
         * get all service names
         *
         */

        public function servicesnames(Request $request){

            return response()->json(services::select('title_en','title_ar','id')->get(),200);
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

            if($request->tags != null){
                //check if the given tags list is string or not if it is convert it to array
                if (gettype($request->tags) == "string")
                    $tags_list = explode(',', substr($request->tags,1,-1));
                else
                    $tags_list = $request->tags;

                // var_dump($fruits_ar);
                //add the new tags to this new service as the user done
                for ($i =0;$i<sizeof($tags_list);$i++){
                    $tag = tags::find($tags_list[$i]);
                    $tag->service_id = $service->id;
                    $tag->save();
                }

            }

            $service->update($request->all());
            $service->save();
            return response()->json($service,200);
        }

        /******************************************************************
         * delete service
         *
         */
        public function serviceDelete($id)
        {
            $service = services::find($id);
            if (is_null($service)){
                return response()->json('service not found',404);
            }
            $service->delete();
            return response()->json("done",200);

        }
}
