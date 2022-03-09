@extends('layouts.app')

@section('container')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-auto col-md-4">
                <h3 class="text-center mb-3">Form Login</h3>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md btn-block">Login</button>
                    </div>
                    <a class="mt-3" href="{{route('register-page')}}">Now Register?</a>
                </form>
            </div>
        </div>
    </div>
@endsection