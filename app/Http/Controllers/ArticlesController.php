<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleTag;

class ArticlesController extends Controller
{
    public function index(ArticleTag $tag = null)
    {
        $articles = Article::live()->orderBy('publish_date', 'desc')->paginate(10);
        
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        $articles = Article::live()->orderBy('publish_date', 'desc')->where('id', '!=', $article->id)->limit(3)->get();
        return view('articles.show', compact('article', 'articles'));
    }
}
