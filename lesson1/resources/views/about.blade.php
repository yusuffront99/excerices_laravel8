@extends('layouts.main')

@section('content')
    <div class="container col-md-4">
        <ul>
            <img src="/img/{{$foto}}" alt="" width="200">
            <li>Nama : {{$name}}</li>
            <li>Github : {{$github}}</li>
            <li>IT : {{$dev}}</li>
            
        </ul>
    </div>
@endsection