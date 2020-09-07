<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $confirm = 0;
        return view('index')->with(['confirm' => $confirm]);
    }
}
