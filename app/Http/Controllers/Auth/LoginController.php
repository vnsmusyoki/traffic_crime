<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected function authenticated(Request $request, $user)
    {

        if ($user->hasRole('driver')) {
            return  redirect()->route('driver');
        }
        if ($user->hasRole('student')) {
            return  redirect()->route('student');
        }
        if ($user->hasRole('employer')) {
            return  redirect()->route('employer');
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
