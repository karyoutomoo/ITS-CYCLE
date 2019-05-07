<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
    protected $redirectTo = '/';

    protected function authenticated(Request $request, $user)
{
    if(auth()->user()->Admin())
          {
             return redirect('/dashboard');
           // protected $redirectTo = '/admin';
          }
          else
          {
            return redirect('/');
           // protected $redirectTo = '/';
          }
}

    // if ( Auth::User()->isAdmin == 1)
    //   {
    //    protected $redirectTo = '/admin';
    //   }
    //   else
    //   {
    //    protected $redirectTo = '/';
    //   }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
