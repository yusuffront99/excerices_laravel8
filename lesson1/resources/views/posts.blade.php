@extends('layouts.main')

@section('container')
<div class="row">
    @foreach($posts as $post)
        <div class="col-sm-6 mb-3">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$post->title}} </h5>
                <h5 class="card-subtitle text-muted"> {{$post->judul}} </h5><hr>
                <p class="card-text mt-3"> {{$post->excerpt}} </p>
                <a href="/posts/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    @endforeach
</div>
@endsection


