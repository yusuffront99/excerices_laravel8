@extends('layouts.main')

@section('container')
<div class="row mt-3 mx-2">
    <h6>Post Category : {{$category}} </h6>
    @foreach ($posts as $post)
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title"> {{$post->title}} </h5>
            <h5 class="text-muted"> {{$post->sub_title}} </h5>
            <a href="/posts/{{$post->sub_title}}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection