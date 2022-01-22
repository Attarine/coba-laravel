@extends('layouts.main')

@section('container')

<article>
    <div class="card" style="width: 100%;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{ $post["title"] }}</h2>
            <h5 class="card-text">By : {{ $post["author"] }}</h5>
            <p class="card-text">{{ $post["body"] }}</p> 
        </div>
      </div>
</article>
<a href="/blog" class="btn btn-warning mt-2">Back To Post</a>

@endsection