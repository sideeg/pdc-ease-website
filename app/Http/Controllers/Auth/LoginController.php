<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showEmployeeLoginForm()
    {
        return view('auth.login');
    }

    public function employeeLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user = User::where('email' , $request->email)->get();
            // dd($user);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $user = Auth::user();
            Auth::login($request->user());
            $token = Str::random(60);

            $request->user()->forceFill([
                'remember_token' => $token,
            ])->save();
            if(! is_null($user))
                if($user->role_id == '1')//if super admin
                    return redirect()->intended('/dashboard')->with('token',$token);
                elseif($user->role_id == '2')//if admin
                    return redirect()->intended('/dashboard-sliders')->with('token',$token);
                else // if bloger
                    return redirect()->intended('/dashboard-blog')->with('token',$token);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
