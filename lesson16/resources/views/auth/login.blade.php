@extends('layouts.main')

@section('container')
    <div class="row m-5">
      <div class="col-sm-4 col-md-auto">
        <form>
          <h2 class="mb-3 text-center text-danger">Form Login</h2>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-info btn-block">Submit</button>
            <a href="{{route('register')}}" class="mt-3">Already have an account yet? please register</a>
        </form>
    </div>
    </div>
@endsection