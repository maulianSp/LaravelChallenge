<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('sanber.register');
    }

    public function welcome(Request $request){
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $gender = $request->gender;
        $national = $request->nationality;
        $lang = $request->lang;
        $bio = $request->bio;

        return view ('sanber.welcome',compact('first_name','last_name','gender','national','lang','bio'));
    }
}
