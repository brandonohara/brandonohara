@foreach($tags as $tag)
    <a href="{{ route('articles.tag', ['tag' => $tag->slug ]) }}">{{ $tag->name }}</a>
    @if(!$loop->last), @endif
@endforeach