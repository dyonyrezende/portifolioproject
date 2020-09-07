<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Controller
{
    public function store(){

        $data = request()->validate([
            'nameForm' => 'required',
            'emailForm' => 'required|email',
            'messageForm' => 'required|max:300',
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        $confirm = 1;
        return view('index')->with(['confirm' => $confirm]);

    }


}
