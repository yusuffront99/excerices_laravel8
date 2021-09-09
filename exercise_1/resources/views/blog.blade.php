
@extends('layouts.main')

@section('container')
<div class="row">
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{$blog->title}}</h3>
            <h6 class="sub-title"><a href="/categories/{{$blog->category->sub_title}}">{{$blog->category->name}}</a></h6>
            <h6 class="card-title text-muted">{{$blog->content}}</h6>
            <a href="/blogs" class="btn btn-primary">Back To Navs</a>
        </div>
        </div>
        </div>
</div>
@endsection