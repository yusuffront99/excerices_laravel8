
@extends('layouts.main')

@section('container')
<div class="row">
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{$blog->title}}</h3>
            <h6 class="card-title text-muted">{{$blog->content}}</h6>
            <a href="/Post/{slug}" class="btn btn-primary">Details</a>
        </div>
        </div>
        </div>
</div>
@endsection