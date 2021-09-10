@extends('layouts.main')

@section('container')
<div class="row mx-3 my-2">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5><hr>
            <p class="text-muted">
                <a href="/categories/{{$post->category->name}}">Category : {{$post->category->name}}</a>
            </p>
            <p class="card-text" style="color:rgb(75, 56, 250)">{{$post->content}}</p>
            <a href="/posts/{{$post->title}}" class="btn btn-primary">Details</a>
        </div>
        </div>
    </div>
</div>
@endsection