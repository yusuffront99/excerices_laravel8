@extends('layouts.main')

@section('container')
<div class="container mt-3">
    @foreach ($blogs as $blog)
    <div class="row my-2">
        <div class="col-sm-">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> <a href="/blogs/{{$blog->slug}}" class="text-decoration-none">{{$blog->title}}</a></h5>
                <p class="card-text">By : yusuffront99 <a href="/categories/{{$blog->category->slug}}" class="text-decoration-none">{{$blog->category->name}}</a> </p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read mode ...</a>
            </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
