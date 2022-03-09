@extends('layouts.app')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-auto col-md-4">
                <h3 class="text-center mb-3">Form Register</h3>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md btn-block">Register</button>
                    </div>
                    <a href="{{route('login')}}">Now Login</a>
                </form>
            </div>
        </div>
    </div>
@endsection