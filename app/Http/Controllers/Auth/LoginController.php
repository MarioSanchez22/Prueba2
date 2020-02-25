<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view ('auth.login');
    }

    public function login(){
        $credentials=$this->validate(request(),[
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
        if(Auth::attempt($credentials)){
            return redirect(route('Dashboard'));
        }
            return back()
            ->withInput(request(['email']));
    }

    public function logout(){
       Auth::logout();
       return redirect('/');
    }
}
