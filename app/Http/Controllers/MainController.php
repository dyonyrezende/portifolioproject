<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        $confirm = 0;
        return view('index')->with(['confirm' => $confirm]);
    }

    public function login(){

        if(auth::check()){
            return view('crud');
        }
        else{
            return view('auth.login');
        }



    }

}
