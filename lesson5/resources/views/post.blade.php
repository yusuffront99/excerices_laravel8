@extends('layouts.main')

@section('container')
<div class="container mt-2">
    <div class="card">
        <div class="card-header">
            {{$post->title}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$post->sub_title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
</div>
@endsection