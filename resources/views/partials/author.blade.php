<div class="author">
    <div class="author-avatar">
        <img src="{{ $author->avatar }}" alt="{{ $author->name }}">
    </div>
    <div class="flex">
        <h3>{{ $author->name }}</h3>
        {!! $author->bio !!}
        @include('partials.social-media')
    </div>
</div>