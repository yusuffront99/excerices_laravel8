@extends('layouts.main')

@section('container')
    <h1 class="text-center mt-4">{{$title}}</h1>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Title</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            
            @foreach ($posts as $post)
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td>{{$post->title}}</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection