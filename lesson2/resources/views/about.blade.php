@extends('layouts.main')

@section('container')
<div class="container px-3 mt-3">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text"> {{$body}} </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
@endsection