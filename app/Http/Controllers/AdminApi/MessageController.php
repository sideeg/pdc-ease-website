<?php

namespace App\Http\Controllers\AdminApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;
use Carbon\Carbon;

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

        /*******************************************************************
         *
         * statistic
         */
        public function messageStatisic()
        {
            // $message = message::select(\DB::raw('MONTH(created_at) as month')->groupBy('month')->get()->keyBy('month'));
        //     $usersPerMonth =message::select(\DB::raw('count(id) as `data`'),\DB::raw("DATE_FORMAT(created_at, '%Y-%m') new_date"))
        // ->groupBy('new_date')->orderBy('new_date')->get();
            // dd(message::groupBy(\DB::raw('MONTH(created_at)'))->get());

            $fromDate = Carbon::now()->startOfYear()->toDateString();
            $tillDate = Carbon::now()->endOfYear()->toDateString();
            // dd(Carbon::now()->startOfYear()->toDateString());

            // $revenueLastMonth = message::whereBetween('created_at',[$fromDate,$tillDate])->count();
            // dd($revenueLastMonth);

            $monthlysales=\DB::table('messages')
            ->select(\DB::raw('sum(id) as total'),\DB::raw('date(created_at) as dates'))
            ->groupBy('dates')
            ->orderBy('dates','desc')
           ->take(12)->get();
           $array = array();
           for($i=0;$i<sizeof($monthlysales);$i++)
                $array[]=$monthlysales[$i]->total;


        //    dd($array);
           return view('reports.monthlysales', compact('monthlysales'));
        }


}
