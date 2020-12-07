<?php

namespace App\Http\Controllers\AdminApi;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /************************************************************
         *
         * get all User
         *
         */

        public function Users(Request $request){

            return response()->json(User::with('role')->paginate(9),200);
            // return json_encode(User::paginate(9));
        }

        /****************************************************************
         *
         * get slide by id
         *
         */
        public function UserById($id)
        {
            $User = User::with('role')->find($id);
            if (is_null($User)){
                return response()->json('User not found',404);
            }
            return response()->json($User,200);
        }


     /******************************************************************
         * delete User
         *
         */
        public function UserDelete($id)
        {
            $User = User::find($id);
            if (is_null($User)){
                return response()->json('User not found',404);
            }
            $User->delete($id);
            return response()->json("done",200);

        }


         /************************************************************
     *
     * add new User
     *
     */
    public function UserSave(Request $request)
    {

        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        if($validatedData->fails()){

            return response()->json('all the filed is  required',400);
        }



        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);


        $User->save();
        return response()->json($User,201);

    }

      /****************************************************************
         *
         * udate User by id
         *
         */
        public function UserUpdate(Request $request,User $User)
        {
            // dd($request->email);
            $User = User::find($request->id);

            if (is_null($User)){
                return response()->json('User not found',404);
            }



            if (!is_null($request->name))
                $User->name = $request->name;
            if (!is_null($request->email))
                $User->email = $request->email;
            if (!is_null($request->password))
                $User->password = $request->password;
            if (!is_null($request->role_id))
                $User->role_id = $request->role_id;

            // $User->update($request->all());
            $User->save();
            return response()->json($User,200);
        }

        /*******************************************************
         *
         *
         *
         */
        public function orderNotficationNum(Request $request){
            $OrderType = 'App\Notifications\NewOrderNotification';
            $count = 0;
            $user =  User::where('remember_token',$request->header('remember_token', 'default'))->first();
            // $user = User::find(1);
            //  var_dump($user);
            if (is_null($user)){
                return response()->json('User not found',404);
            }
            foreach ($user->unreadNotifications as $notification) {
                if( $notification->type == $OrderType)
                    $count+=1;
            }

            // $num = sizeof($user->unreadNotifications );
            return response()->json($count,200);
        }

         /**************************************************************************************************
         *
         *
         *
         */
        public function messageNotficationNum(Request $request){
            $MessageType = 'App\Notifications\NewMessageNotification';
            $count = 0;
            $user =  User::where('remember_token',$request->header('remember_token', 'default'))->first();
            // $user = User::find(1);
            //  var_dump($user);
            if (is_null($user)){
                return response()->json('User not found',404);
            }
            foreach ($user->unreadNotifications as $notification) {
                if( $notification->type == $MessageType)
                    $count+=1;
            }

            // $num = sizeof($user->unreadNotifications );
            return response()->json($count,200);
        }


         /***********************************************************************************************
         *
         *
         *
         */
        public function message(Request $request){
            $MessageType = 'App\Notifications\NewMessageNotification';
            $array[] = array();
            $user =  User::where('remember_token',$request->header('remember_token', 'default'))->first();

            if (is_null($user)){
                return response()->json('User not found',404);
            }
            $i = 1;
            foreach ($user->unreadNotifications as $notification) {
                if( $notification->type == $MessageType){
                    $x = strval($i);
                    $array[]=$notification->data;
                    // dd($notification->data[0]);
                    $i++;
                    $notification->markAsRead();
                }

            }
            unset($array[0]);
            // $user->unreadNotifications->markAsRead();


            return response()->json($array,200);
        }

         /*************************************************************************************************
         *
         *
         *
         */
        public function notfication(Request $request){
            $OrderType = 'App\Notifications\NewOrderNotification';
            $array[] = array();
            $user =  User::where('remember_token',$request->header('remember_token', 'default'))->first();


            if (is_null($user)){
                return response()->json('User not found',404);
            }
            foreach ($user->unreadNotifications as $notification) {
                if( $notification->type == $OrderType){
                    $array[] =$notification->data;
                    $notification->markAsRead();
                }
            }
            unset($array[0]);

            // $user->unreadNotifications->markAsRead();

            // $num = sizeof($user->unreadNotifications );
            return response()->json($array,200);
        }



}
