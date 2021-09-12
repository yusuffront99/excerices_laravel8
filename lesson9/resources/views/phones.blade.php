@extends('layouts.main')

@section('container')
    <h1 class="text-center">{{$title}}</h1>

    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Price($)</th>
                <th scope="col">User Account</th>
                <th scope="col">Post Title</th>
                </tr>
            </thead>
            
            @php
                $no = 1;
            @endphp
            @foreach ($phones as $phone)
                <tbody>
                    <tr>
                    <th scope="row">{{$no++;}}</th>
                    <td>{{$phone->merk}}</td>
                    <td><b>$</b>{{$phone->price}}</td>
                    <td><a href="" class="text-decoration-none text-danger fw-bold">{{$phone->post->name}}</a></td>
                    
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection