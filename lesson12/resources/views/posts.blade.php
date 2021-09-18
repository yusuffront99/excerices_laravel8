@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        @foreach ($posts as $post)
        <div class="card my-4">
            <div class="card-header bg-dark text-white">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <small class="text-muted">Created by : <a href="/authors/">{{$post->user->name}}</a> in <a href=""></a>{{$post->category->name}} </small><hr>

                <p class="card-text">{{$post->summary}}</p>
                <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More ...</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection