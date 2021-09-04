@extends('layouts.main')

@section('container')
<div class="card text-center">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title"> {{$name}} </h5>
        <p class="card-text"> {{$github}} </p>
        <p class="card-text"> {{$descriptions}} </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer text-muted">
        {{$github}}
    </div>
    </div>
@endsection

