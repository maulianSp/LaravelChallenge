<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('sanber.register');
    }

    public function welcome(){
        return view ('sanber.welcome');
    }
}
