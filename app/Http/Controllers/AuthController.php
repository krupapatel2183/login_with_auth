<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
    }

    public function dashBoardPage(){
        if(Auth::check()){
            return view('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
