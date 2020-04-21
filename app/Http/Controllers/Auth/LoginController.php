<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use app\User;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function auth(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email|max:255',
            'password'=>'required|max:255'
        ]);
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            return redirect('user/home');
        }    
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
