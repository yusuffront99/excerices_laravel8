@extends('layouts.main')

@section('content')
    <div class="container text-center mt-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title"> {{$title}} </h5>
            <p class="card-text"> {{$body}} </p>
            <a href="/blog/{{$id}}" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
    </div>

@endsection