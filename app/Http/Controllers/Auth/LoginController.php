<?php

namespace App\Http\Controllers\Auth;

use App\empresa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        $empresa=empresa::all();
        return view ('auth.login',['empresa'=>$empresa]);
    }

    public function login(){
        $credentials=$this->validate(request(),[
            'email'=>'required|string',
            'password'=>'required|string',
            'EMPRESA_id'=>'required'
        ]);
        $credentials['USER_estado']=1;
        
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
