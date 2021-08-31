@extends('layouts.main')

@section('container')
    <h1>Posts | Blog</h1>
    <hr>
    
    @foreach($posts as $post)
        <article class="my-5">
            <a href="/posts/{{$post['slug']}}"><h2> {{$post['title']}} </h2></a>
            <h5> By : {{$post['author']}} </h5>
            <p> {{$post['body']}} </p>
        </article>
    @endforeach
@endsection