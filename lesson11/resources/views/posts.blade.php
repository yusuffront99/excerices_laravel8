@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        @foreach ($posts as $post)
        <div class="card my-2">
            <div class="card-header text-white bg-primary">
                <h4> {{$post->title}}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->summary}}</p>
                <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read more ...</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection