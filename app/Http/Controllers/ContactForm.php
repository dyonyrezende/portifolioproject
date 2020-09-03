<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactForm extends Controller
{
    public function store(){

        $data = request()->validate([
            'nameForm' => 'required',
            'emailForm' => 'required|email',
            'messageForm' => 'required|max:300',
        ]);

        dd(request()->all());

    }
}
