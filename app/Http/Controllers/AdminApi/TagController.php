<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tags;

class TagController extends Controller
{

    /************************************************************
         *
         * get all tag
         *
         */

        public function tags(Request $request){

            return response()->json(tags::paginate(9),200);
        }
}
