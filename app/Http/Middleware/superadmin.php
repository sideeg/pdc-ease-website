<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class superadmin
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
            if ($user->role_id == 2 || $user->role_id == 1)
                return $next($request);
            else
                return redirect(RouteServiceProvider::HOME);
        }
    }
}
