@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row my-2">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$blog->title}} </h5>
                <h6 class="text-muted"><a href="">cek</a></h6>
                <p class="card-text">{{$blog->content}}</p>
                <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read mode ...</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection