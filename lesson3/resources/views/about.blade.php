@extends('layouts.main')

@section('container')
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">{{$about['title']}}</h5>
        <p class="card-text">{{$about['content']}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection