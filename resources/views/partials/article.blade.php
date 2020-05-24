<article class="col-md-8 offset-md-2 article">
    <div class="article-title no-margins display-flex">
        <h2 class="article-title flex">
            <a href="{{ route('articles.show', $article) }}" class="flex">{{ $article->title }}</a>
        </h2>
        <h4 class="margin-left">
            <time datetime="{{ $article->publish_date }}">{{ $article->publish_date->format('F j, Y') }}</time>
        </h4>
    </div>

    <p>
        {{ $article->excerpt }}
    </p>
</article>