@extends('layouts.main')

@section('container')
    
<div class="row justify-content-center">
    <div class="col-md-4">
        <h1 class="text-center mt-4">Form Login</h1>
        @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
        <main class="form-signin">
            <form action="" method="POST">
                @csrf
                <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" autofocus required>
                <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
                </div>
        
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>

            <small class="d-block text-center mt-3">No Registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection