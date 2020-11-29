<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class bloggerApi
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

        $user = User::where('remember_token',$request->remember_token);

        if(is_null($user)){
            return response()->json(" plese login first",400);
        }else{
            if ($user->role_id == 1 || $user->role_id == 3)
                return $next($request);
            else
            return response()->json("you don't have premmissin ",400);
        }
    }
}
