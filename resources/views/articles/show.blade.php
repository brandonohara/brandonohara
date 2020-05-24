@extends('layouts.app', [
    'navigation' => 'static',
    'title' => $article->title,
    'description' => $article->excerpt
])

@section('content')

<section class="module module-slim module-gray">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="module-header wow fadeInUp">
                    <div class="module-line"></div>
                    <h1 class="module-title">{{ $article->title }}</h1>
                    <div class="module-line"></div>
                    <p class="module-subtitle">
                        Date: <time datetime="{{ $article->publish_date }}">{{ $article->publish_date->format('F d, Y') }}</time>
                        @if($article->tags->count())
                            <span class="hidden-xs hidden-md">
                                <span class="bar">|</span>
                                Tags: @include('partials.tags', ['tags' => $article->tags])
                            </span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<article class="module">
    <div class="container">
        <div class="row margin-top">
            <div class="col-md-8 offset-md-2 rich-text">
                {{ $article->content }}

                @include('partials.author', ['author' => $article->author])
            </div>
        </div>

    </div>
</article>

@include('sections.articles', ['title' => 'Other Articles'])

@include('sections.contact')


@endsection