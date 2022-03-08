@extends('layouts.app')

@section('container')
    <div class="container m-5">
        <div class="text-center">Register Form</div>
        <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="username" class="form-control" id="exampleInputusername1" aria-describedby="usernameHelp" placeholder="Enter username">
                <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">register</button>
        </form>
    </div>
@endsection