@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        @foreach ($categories as $category)
        <ul>
            <li><a href="">{{$category->name}}</a></li>
        </ul>
        @endforeach
    </div>
@endsection