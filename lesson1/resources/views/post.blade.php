@extends('layouts.main')

@section('container')

<div class="card text-left">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title"> {{$post->judul}} </h5>
        <h5 class="text-muted">By : Yusuffront in {{$post->category->name}} </h5>
        <p class="card-text"> {{$post->author}} </p>
        <p class="card-text"> {!! $post->body !!} </p>
        <a href="/posts" class="btn btn-primary">Back to Blog</a>
    </div>
    <div class="card-footer text-muted">
        
    </div>
    </div>
@endsection
