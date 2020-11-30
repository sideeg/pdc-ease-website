<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\role;

class roleController extends Controller
{
    /************************************************************
         *
         * get all role
         *
         */

        public function roles(Request $request){

            return response()->json(role::all(),200);
            // return json_encode(role::paginate(9));
        }

        /****************************************************************
         *
         * get slide by id
         *
         */
        public function roleById($id)
        {
            $role = role::find($id);
            if (is_null($role)){
                return response()->json('role not found',404);
            }
            return response()->json($role,200);
        }


     /******************************************************************
         * delete role
         *
         */
        public function roleDelete($id)
        {
            $role = role::find($id);
            if (is_null($role)){
                return response()->json('role not found',404);
            }
            $role->delete($id);
            return response()->json("done",200);

        }

}
