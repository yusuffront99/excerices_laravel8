@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="justify-content-center">
            <h3>Form Register</h3>
            <form action="/register" method="post">
                @csrf
                <ul>
                    <li>
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
                        @error('name')
                            <br><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username"  class="@error('username') is-invalid @enderror" value="{{old('username')}}">
                        @error('username')
                        <br><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="@error('username') is-invalid @enderror" value="{{old('password')}}">
                        @error('email')
                        <br><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror">
                        @error('password')
                        <br><small class="text-danger">{{ $message }}</small>
                        @enderror
                    </li>
                </ul>
                <button class="btn-primary d-flex flex-column" type="submit">Register</button>
            </form>
            

            <small><a href="/login">Login Now</a></small>
        </div>
    </div>
@endsection