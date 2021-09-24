@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="justify-content-center">
            <h4>Form Login</h4>
            @if (session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div>
            @endif
            @if (session('failed'))
                <div class="alert alert-danger">
                {{ session('failed') }}
                </div>
            @endif
            <form action="/login" method="POST">
                @csrf
                <div class="my-2">
                    <div class="form-floating col-md-4">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating col-md-4">
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                        <label for="password">Password</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating mt-2">
                        <button type="submit" class="btn-primary d-block">login</button>
                    </div>
                </div>
                
            </form>
            <small class="mt-2"><a href="/register">Register Now?</a></small>
        </div>
    </div>
@endsection