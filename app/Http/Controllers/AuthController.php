<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login');
    }

    public function login(Request $request){
    	if(Auth::attempt($request->only('username','password'))){
    		return redirect('/');
    	}
    	return redirect('/login')->with('errors', 'Anda memasukkan username atau password yang salah');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
