@dd($post);

@extends('layouts.main')

@section('container')

<div class="card text-left">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title"> {{$judul}} </h5>
        <p class="card-text"> {{$author}} </p>
        <p class="card-text"> {{$body}} </p>
        <a href="/posts" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
        
    </div>
    </div>
@endsection