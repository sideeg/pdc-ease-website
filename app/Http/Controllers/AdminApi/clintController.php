<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\clints;

class clintController extends Controller
{
     /************************************************************
     *
     * add new clint
     *
     */
    public function clintSave(Request $request)
    {

        $validatedData = Validator::make($request->all(),[
            'logo' => 'required',
        ]);

        if($validatedData->fails()){

            return response()->json('all the filed is  required',400);
        }

        //create new clint
        // $clint = clints::create($request->all());

        $ext= $request->logo->extension();

        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(storage_path('app/public/sliders'), $imageName);


        $clint = clints::create([
            'logo' => $imageName,
        ]);



        return response()->json($clint,201);

    }

     /****************************************************************
         *
         * update clint by id
         *
         */
        public function clintUpdate(Request $request,clints $clint)
        {
            // dd($request->id);
            $clint = clints::find($request->id);

            if (is_null($clint)){
                return response()->json('clint not found',404);
            }



            $clint->update($request->all());
            $clint->save();
            return response()->json($clint,200);
        }

         /****************************************************************
         *
         * get clint by id
         *
         */
        public function clintById($id)
        {
            $clint = clints::find($id);
            if (is_null($clint)){
                return response()->json('clint not found',404);
            }
            return response()->json($clint,200);
        }


    /************************************************************
         *
         * get all clint
         *
         */

        public function clint(Request $request){

            return response()->json(clints::paginate(9),200);
        }


        /******************************************************************
         * delete clint
         *
         */
        public function clintDelete(Request $request,$id)
        {
            $clint = clints::find($id);
            if (is_null($clint)){
                return response()->json('clint not found',404);
            }

            $clint->delete($request);
            return response()->json("done",200);

        }
}