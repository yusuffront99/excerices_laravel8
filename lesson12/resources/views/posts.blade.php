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

    <div class="container mt-4 text-center">
        <h3>{!!$title!!}</h3>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/posts">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="search" placeholder="Search..." aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        @if ($posts->count())
        <div class="card mb-3 mt-4">
            <img src="https://source.unsplash.com/1600x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
            <div class="card-body text-center">
                <h5 class="card-title">{{$posts[0]->title}}</h5>
                <p class="card-text">{{$posts[0]->summary}}</p>
                <p class="card-text"><small>Wrote by : <a href="/authors/{{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}} </a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{$posts[0]->category->name}}</a></small> <small class="text-muted mb-2">&#9201; lasted post {{$posts[0]->created_at->diffForHumans()}}</small>
                </p>
                <a class="btn btn-primary btn-sm" href="/posts/{{$posts[0]->slug}}">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-4 my-3">
                    <div class="card">
                    <div class="position-absolute bg-dark px-3 py-2"><a href="/posts/{{$post->slug}}" class="text-decoration-none text-white">{{$post->category->name}}</a></div>
                    <img src="https://source.unsplash.com/1600x800?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{$post->slug}}" class="text-decoration-none text-dark">{{$post->title}}</a></h5>
                        <p class="card-text"><small>Wrote by : <a href="/authors/{{$posts[0]->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> &#9201; {{$posts[0]->created_at->diffForHumans()}}</small></p>
                        <hr>
                        <p class="card-text">{{$post->summary}}</p>
                        <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More ...</a>
                    </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>  
    </div>

    @else
    <p class="fs-4">Post Not Found</p>
    @endif
@endsection