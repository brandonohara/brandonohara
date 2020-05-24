<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleTag;

class ArticlesController extends Controller
{
    public function index(ArticleTag $tag = null)
    {
        $query = Article::live()->orderBy('publish_date', 'desc');

        if ($tag) {
            $query = $query->join('wink_posts_tags', 'wink_posts.id', '=', 'wink_posts_tags.post_id')
                                    ->where('wink_posts_tags.tag_id', $tag->id);
        }

        $articles = $query->paginate(10);
        
        return view('articles.index', compact('articles', 'tag'));
    }

    public function show(Article $article)
    {
        $articles = Article::live()->orderBy('publish_date', 'desc')->where('id', '!=', $article->id)->limit(3)->get();
        return view('articles.show', compact('article', 'articles'));
    }
}
