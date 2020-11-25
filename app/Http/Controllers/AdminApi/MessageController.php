<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
  /************************************************************
         *
         * get all message
         *
         */

        public function messages(Request $request){

            return response()->json(message::paginate(9),200);
            // return json_encode(message::paginate(9));
        }

        /****************************************************************
         *
         * get slide by id
         *
         */
        public function messageById($id)
        {
            $message = message::find($id);
            if (is_null($message)){
                return response()->json('message not found',404);
            }
            return response()->json($message,200);
        }


     /******************************************************************
         * delete message
         *
         */
        public function messageDelete($id)
        {
            $message = message::find($id);
            if (is_null($message)){
                return response()->json('message not found',404);
            }
            $message->delete($id);
            return response()->json("done",200);

        }

}
