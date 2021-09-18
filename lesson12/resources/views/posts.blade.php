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

        @if ($posts->count())
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        @else
            <p class="fs-4">Post Not Found</p>
        @endif

    </div>
@endsection