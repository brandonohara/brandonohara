<?php

namespace App\Http\Controllers;

use App\Resume;

class HomeController extends Controller
{
    public function index()
    {
        $resume = Resume::with('previous')->whereNull('prior')->get();
        
        return view('home', compact('resume'));
    }
}
