<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class superAdminApi
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
        $user = User::where('remember_token',$request->header('remember_token', 'default'))->get();
        $user = $user->toArray();

        if(is_null($user) || sizeof($user) ==0){
            return response()->json(" plese login first",400);
        }else{
            $user = $user[0];
            if ($user['role_id'] == 1 )
                return $next($request);
            else
            return response()->json("you don't have premmissin ",400);
        }
    }
}
