<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('authentication.login');
    }

    public function register(){
        return view('authentication.register');
    }
}
