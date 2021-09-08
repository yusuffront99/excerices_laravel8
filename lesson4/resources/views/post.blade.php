@extends('layouts.main')

@section('container')
<div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$post['title']}}</h5>
        <p class="card-text">{{$post['body']}}</p>
        <a href="/posts" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endsection