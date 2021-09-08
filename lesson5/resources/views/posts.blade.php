@extends('layouts.main')

@section('container')
<div class="row mt-3 mx-2">
    @foreach ($posts as $post)
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title"> {{$post['title']}} </h5>
            <h5 class="text-muted"> {{$post['slug']}} </h5>
            <p class="card-text"> {{$post['body']}} </p>
            <a href="/posts/{{$post['slug']}}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection