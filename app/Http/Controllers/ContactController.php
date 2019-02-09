<?php

namespace App\Http\Controllers;

use App\Resume;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        
        flash()->success("Thanks for contacting me, I'll get back to you as soon as possible.");
        return back();
    }
}
