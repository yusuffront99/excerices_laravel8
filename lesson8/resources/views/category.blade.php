@extends('layouts.main')

@section('container')
<div class="container mt-3">
    @foreach ($blogs as $blog)
    <div class="row my-2">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"> {{$blog->title}} </h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read mode ...</a>
            </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
