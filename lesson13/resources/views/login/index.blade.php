@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-md-4">

        @if (session()->has('success'))     
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{session('success')}}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('failed'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{session('failed')}}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" name="email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now</a></small>
        </main>
    </div>
</div>
@endsection