@extends('layouts.main')

@section('container')
<h1 class="mb-4">Post category : {{$category}}</h1>
<div class="row">
    @foreach($posts as $post)
        <div class="col-sm-6 mb-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$post->title}} </h5>
                <h5 class="card-subtitle text-muted"> {{$post->judul}} </h5><hr>
                <p class="card-text mt-3"> {{$post->excerpt}} </p>
                <a href="/posts/{{$post->slug}}" class="btn btn-primary">Details &raquo;</a>
            </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
