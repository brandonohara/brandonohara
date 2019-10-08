<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Resume;
use App\Http\Requests\ContactRequest;
use Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $form = new ContactForm(request('name'), request('email'), request('message'));

        Mail::to('brandon@brandonohara.com')->send($form);
        
        flash()->overlay(
            "Thanks for contacting me, I'll get back to you as soon as possible.", 
            "Contact Form Submitted"
        );
        
        return back();
    }
}
