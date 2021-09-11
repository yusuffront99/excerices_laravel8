@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row my-2">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$blog->category->name}} </h5>
                <h6 class="text-muted"><a href="/categories/{{$blog->category->slug}}"> {{$blog->category->name}} </a></h6>
                <p class="card-text">{{$blog->content}}</p>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection