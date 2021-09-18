@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h3 class="card-title text-center">{{$post->title}}</h3><hr>
                <p>
                    <b>By Created : <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a> </b>
                </p>
                <p class="card-text">{!!$post->content!!}</p>
                <a href="/posts" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
@endsection