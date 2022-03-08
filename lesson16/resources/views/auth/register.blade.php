@extends('layouts.main')

@section('container')
    <div class="row m-5">
        <div class="col-sm-4 col-md-auto">
        <form method="POST" action="{{route('register-store')}}">
            @csrf
            <h2 class="mb-3 text-center text-danger">Form Register</h2>
            <div class="form-group">
                <label for="exampleInputusername1">username address</label>
                <input type="username" name="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Enter username">
                <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-info btn-block">Submit</button>
            <a href="{{route('login')}}" class="mt-3">have you an account, please login?</a>
        </form>
    </div>
    </div>
@endsection