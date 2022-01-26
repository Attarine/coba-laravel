@extends('layouts.main')

@section('container')

    <h1 class="md-5">{{ $post->title }}</h1>

    <p>By. Cicio in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}


<a href="/blog">Back To Post</a>

@endsection
