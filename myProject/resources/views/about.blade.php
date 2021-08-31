@extends('layouts.main')

@section('container')
    <h1>About</h1>
    <hr>
    <ul>
        <li>Name : {{$name}} </li>
        <li>Github : {{$github}} </li>
        <img src="images/{{$images}}" alt="" width="200">
    </ul>
@endsection