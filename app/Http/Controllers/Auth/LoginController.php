<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function Login(){
        if ((Auth::user() == true) && (Auth::user()->role == 2)) {
            return redirect()->route('Admin.cp');
        }
        elseif((Auth::user() == true) && (Auth::user()->role == 1)){
            return redirect()->route('Admin.shop');
        }
        elseif((Auth::user() == true) && (Auth::user()->role == 0)){
            return redirect()->route('view.show');
        }
        else {
           return view('auth.login');
        }
    }
    public function PostLogin(Request $rq){
    
     if (Auth::attempt(['name' => $rq->name, 'password' => $rq->password], $rq->remember) || (Auth::attempt(['email' => $rq->name, 'password' => $rq->password], $rq->remember)) && Auth::user()->role >= 2){
        return redirect()->route('Admin.cp');
    }
//    elseif (Auth::attempt(['name' => $rq->name, 'password' => $rq->password], $rq->remember) || (Auth::attempt(['email' => $rq->name, 'password' => $rq->password], $rq->remember)) && Auth::user()->role == 1){
//        return redirect()->route('Admin.cp');
//    }

    elseif ($rq->name == '' || $rq->password == '') {
        return redirect()->route('login')->with('errMsg', "Nhập tên đăng nhập hoặc mật khẩu!");
    }
         
     else{
        return redirect()->route('login')->with('errMsg', "Sai tên đăng nhập hoặc mật khẩu!");
    }
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
