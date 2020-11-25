<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;


class OrderController extends Controller
{

    /************************************************************
         *
         * get all order
         *
         */

        public function order(Request $request){

            return response()->json(orders::orderBy('status')->with('order_tags')->paginate(9),200);
        }



         /****************************************************************
         *
         * get order by id
         *
         */
        public function orderById($id)
        {
            $order = orders::find($id);
            if (is_null($order)){
                return response()->json('order not found',404);
            }
            return response()->json($order,200);
        }


          /******************************************************************
         * delete order
         *
         */
        public function orderDelete(Request $request,$id)
        {
            $order = orders::find($id);
            if (is_null($order)){
                return response()->json('order not found',404);
            }

            $order->delete($request);
            return response()->json("done",200);

        }

          /****************************************************************
         *
         * update order status by id
         *
         */
        public function orderUpdate($id)
        {
            // dd($request->id);
            $order = orders::find($id);

            if (is_null($order)){
                return response()->json('order not found',404);
            }
            //change order status
            if ($order->status)
                $order->status = 0;
            else
                $order->status = 1;
            $order->save();
            return response()->json($order->with('order_tags.tag')->get(),200);
        }
}
