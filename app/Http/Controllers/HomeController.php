<?php

namespace App\Http\Controllers;

use App\Article;
use App\Resume;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::live()->orderBy('publish_date', 'desc')->limit(5)->get();

        $resume = Resume::with('previous')->whereNull('prior')
                        ->where('active', true)
                        ->orderBy('order', 'asc')
                        ->get();
        
        return view('home', compact('articles', 'resume'));
    }
}
