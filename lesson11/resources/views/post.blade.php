@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="card my-2">
        <div class="card-header text-white bg-primary">
            Posts<h4>&raquo; {{$post->title}}</h4>
        </div>
        <div class="card-body">
            <h3 class="card-title text-center">{{$post->title}}</h3><hr>
            <p>Created by : </p>
            <p class="card-text">{{$post->content}}</p>
            <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read more ...</a>
        </div>
    </div>
</div>
@endsection