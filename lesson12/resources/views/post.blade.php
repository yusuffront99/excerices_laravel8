@extends('layouts.main')

@section('container')
    <div class="container mt-4">

            <p class="card-text"><small>Wrote by : <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> &#9201; {{$post->created_at->diffForHumans()}}</small></p>

            <img src="https://source.unsplash.com/1600x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
            <div class="card-body">
                <h3 class="card-title text-center">{{$post->title}}</h3><hr>
                <p class="card-text">{!!$post->content!!}</p>
                <a href="/posts" class="btn btn-primary">Back to Main</a>
            </div>
            {{-- <div class="card-footer text-muted">
                2 days ago
            </div> --}}
    </div>
@endsection