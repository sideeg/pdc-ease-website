<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;


class bloger
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
        return $next($request);

        $user = User::where('remember_token',$request->header('remember_token', 'default'));
        $user = $user->toArray();

        if(is_null($user) || sizeof($user) ==0){
            return response()->json(" plese login first",401);
        }else{
            $user = $user[0];
            if ($user['role_id'] == 1 || $user['role_id'] == 3)
                return $next($request);
            else
            return response()->json("you don't have premmissin ",401);
        }
    }
}
