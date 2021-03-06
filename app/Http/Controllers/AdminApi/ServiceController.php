<?php

namespace App\Http\Controllers\AdminApi;

use App\Models\services;
use App\Models\tags;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ServiceController extends Controller
{
    public $mainFolder = "images\svg\service\\";
    /************************************************************
     *
     * add new service
     *
     */
    public function serviceSave(Request $request)
    {
        // dd($request->all());

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
        $uploads_folder = $this->mainFolder;
        if (!file_exists($uploads_folder)) {
            mkdir($uploads_folder, 0777, true);
        }

        $ext= $request->image->extension();

        $imageName = time().'.'.$request->image->extension();
        $request->image->move($uploads_folder, $imageName);
// dd($request->tags);
        $service = services::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'desc_en' => $request->desc_en,
            'desc_ar' => $request->desc_ar,
            'image' => $uploads_folder.$imageName,
        ]);

        if (!is_null($request->tags)){
            //check if the given tags list is string or not if it is convert it to array
            if (gettype($request->tags) == "string")
                $tags_list = explode(',', substr($request->tags,0,-2));
            else
                $tags_list = $request->tags;
                // dd($tags_list);
                //add the new tags to this new service as the user done
            for ($i =0;$i<sizeof($tags_list);$i++){
                $tag = tags::find($tags_list[$i]);
                $tag->service_id = $service->id;
                $tag->save();
            }
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
        public function serviceUpdate(Request $request)
        {

            // dd($request->all());

            $service = services::find($request->id);

            if (is_null($service)){
                return response()->json('service not found',404);
            }
// dd($request->tags);
            if($request->tags){
                //check if the given tags list is string or not if it is convert it to array
                if (gettype($request->tags) == "string")
                    $tags_list = explode(',', substr($request->tags,0));
                else
                    $tags_list = $request->tags;

                // var_dump($fruits_ar);
                //add the new tags to this new service as the user done
                // dd($tags_list);
                for ($i =0;$i<sizeof($tags_list);$i++){
                    $tag = tags::find($tags_list[$i]);
                    $tag->service_id = $service->id;
                    $tag->save();
                }

            }
// dd($request->image->extension());
// if (gettype($request->image)=="string"){dd("true");}
            if(!is_null($request->image) && !gettype($request->image) == gettype("string")){
                $uploads_folder = $this->mainFolder;
                if (!file_exists($uploads_folder)) {
                     mkdir($uploads_folder, 0777, true);
                }
                dd("dfdf");
                 $ext= $request->image->extension();

                $imageName = time().'.'.$request->image->extension();


                $service->image = $uploads_folder.$imageName;
                $request->image->move($uploads_folder, $imageName);

            }

            if (!is_null($request->title_en))
                $service->title_en = $request->title_en;
            if (!is_null($request->title_ar))
                $service->title_ar = $request->title_ar;
            if (!is_null($request->desc_en))
                $service->desc_en = $request->desc_en;
            if (!is_null($request->desc_ar))
                $service->desc_ar = $request->desc_ar;

            // $service->update($request->all());
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
