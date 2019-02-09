<?php

namespace App\Http\Controllers;

use App\Resume;

class HomeController extends Controller
{
    public function index()
    {
        $resume = Resume::all();
        return view('home', compact('resume'));
    }
}
