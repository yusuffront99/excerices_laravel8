{{-- @extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <h3>{!!$title!!}</h3><hr>
        @foreach ($posts as $post)
        <div class="card my-4">
            <div class="card-header bg-dark text-white">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <small class="text-muted">Created by : <a href="/authors/{{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a> </small><hr>

                <p class="card-text">{{$post->summary}}</p>
                <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More ...</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection --}}

@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        <h3>{!!$title!!}</h3>
        <small class="text-muted mb-2">&#9201; lasted post {{$posts[0]->created_at->diffForHumans()}}</small>

        @if ($posts->count())
        <div class="card mb-3 mt-4">
            <img src="https://source.unsplash.com/1600x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
            <div class="card-body text-center">
                <h5 class="card-title">{{$posts[0]->title}}</h5>
                <p class="card-text">{{$posts[0]->summary}}</p>
                <p class="card-text"><small>Wrote by : <a href="/authors/{{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}} </a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a> </small></p>
                <a class="btn btn-primary btn-sm" href="/posts/{{$posts[0]->slug}}">Read More</a>
            </div>
        </div>
        @else
            <p class="fs-4">Post Not Found</p>
        @endif

        <div class="container">
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-4 my-3">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </div>
@endsection