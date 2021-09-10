@extends('layouts.main')

@section('container')

    <h1>Post Category : {{$category}}</h1>
    @foreach ($posts as $post)
    <div class="row mx-3 my-2">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text" style="color:rgb(75, 56, 250)">{{$post->summary}}</p>
                <a href="/posts/{{$post->title}}" class="btn btn-primary">Details</a>
            </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection