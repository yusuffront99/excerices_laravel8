@extends('layouts.main')

@section('container')
<div class="row">
    @foreach ($posts as $p)
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title"> {{$p->title}} </h5>
            <p class="card-text"> {{$p->excerpt}} </p>
            <a href="/posts/{{$p->id}}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
    </div>
    @endforeach
</div>
@endsection