@extends('layouts.app')

@section('content')

<section id="intro">
    <h1 class="d-none d-md-inline-block">HELLO, I'M BRANDON O'HARA</h1>
    <h2>LARAVEL ENTHUSIAST. BEER DRINKER. TERRIBLE GOLFER.</h2>
</section>

@include('sections.skills')

@include('sections.plugins')

@include('sections.resume')

@include('sections.social')

@include('sections.about')

@include('sections.contact')

@endsection