<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('post'))
        {
            //requests
            $email = $request->email;
            $password = $request->password;
            //Login Authenticate
           if( Auth::attempt(["email" =>$email , "password" => $password]))
               return redirect('/dashboard');
           else
                return redirect('/login');
        }
        else
        {
            return view('users.login');
        }
    }

    public function logoutFunc(){
        Auth::logout();
        return redirect('/login');
    }
}
