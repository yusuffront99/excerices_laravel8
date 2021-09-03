@extends('layouts.main')

@section('container')
<div class="row">
    @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$post['judul']}} </h5>
                <h5 class="card-subtitle text-muted"> {{$post['author']}} </h5><hr>
                <p class="card-text mt-3"> {{$post['body']}} </p>
                <a href="/posts/{{$post['slug']}}" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    @endforeach
</div>
@endsection