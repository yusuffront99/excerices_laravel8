@extends('layouts.app')

@section('container')
    <div class="container mt-5">
        <div class="text-center">Hello, {{auth()->user()->name}}</small></div>
    </div>
@endsection