
@extends('layouts.main')

@section('container')
<div class="row">
    @foreach ($blogs as $blog)
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{$blog->title}}</h3>
            <h6 class="card-title text-muted">{{$blog->sub_title}}</h6>
            <a href="/blogs/{{$blog->sub_title}}" class="btn btn-primary">Details</a>
        </div>
        </div>
        </div>
    @endforeach
</div>
@endsection