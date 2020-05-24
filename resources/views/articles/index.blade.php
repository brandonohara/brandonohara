@extends('layouts.app', [
    'navigation' => 'static',
    'title' => ($tag ? $tag->name . ' ' : '') . ' Articles',
    'description' => 'Articles written about the developer experience, Laravel, and other web development topics.'
])

@section('content')

<section class="module module-slim module-gray">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="module-header wow fadeInUp">
                    <div class="module-line"></div>
                    <h2 class="module-title">Recent Articles</h2>
                    <div class="module-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="articles" class="module">
    <div class="container">
        
        <div class="row">
            @foreach($articles as $article)
                @include('partials.article', ['article' => $article])
            @endforeach
        </div>
        

        <div class="row margin-top">
            <div class="col-md-6 offset-md-3 text-center">
                {{ $articles->links() }}
            </div>
        </div>

    </div>
</section>

@include('sections.contact')


@endsection