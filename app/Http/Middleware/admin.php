<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class admin
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
            return redirect(RouteServiceProvider::HOME);
        }else{
            return $next($request);
        }

    }
}
