@extends('dashboard.layouts.main')

@section('container')
<div class="container my-3">
    <div class="row">
        <article class="col-lg-8">
            <h3 class="card-title text-center">{{$post->title}}</h3><hr>
            <a href="/dashboard/posts" class="btn btn-success btn-sm">Back to My Post</a>
            <a href="" class="btn btn-warning btn-sm">Edit</a>
            <a href="" class="btn btn-danger btn-sm">Delete</a>
            <img src="https://source.unsplash.com/1600x600?{{$post->category->name}}" class="card-img-top mt-3" alt="{{$post->category->name}}">
            <p class="card-text">{!!$post->content!!}</p>
            <a href="/posts" class="btn btn-primary">Back to Main</a>
        </article>
    </div>
</div>
@endsection