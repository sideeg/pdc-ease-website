<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class adminApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        // dd($request->header('remember_token', 'default'));
        $user = User::where('remember_token',$request->header('remember_token', 'default'))->get();
        $user = $user->toArray();
        // dd($user[0]['name']);


        if(is_null($user) || sizeof($user) ==0){
            return response()->json(" plese login first",401);
        }else{
            $user = $user[0];
            if ($user['role_id'] == 1 || $user['role_id'] == 2)
                return $next($request);
            else
            return response()->json("you don't have premmissin ",401);
        }
    }
}
