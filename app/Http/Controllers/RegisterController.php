<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('protectRoutes');
    }

    public function index(Request $request){
        if($request->isMethod('post'))
        {
            $user = new User();
            //Validation
            $this->validate(request() , [
                'password' => 'min:6',
                'email' => 'unique:users',
            ],[
                'password.min' => 'تجب ان تكون كلمة المرور اكبر من 6 حروف',
                'email.unique' => 'هذا البريد الالكترونى مستخدم'
            ]);
            //Create new User
            $user->name = $request->name ;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = Hash::make($request->password);
            //save and Authenticate
            $user->save();
            //Auth::login($user);
            //redirect
            return redirect('/dashboard')->with('success' , 'تم تسجيل العضو بنجاح');
        }
        else
        {
            return view('users/register');
        }
    }
}
