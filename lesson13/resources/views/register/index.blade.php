@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5 col-sm-auto">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form cation="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    <label for="username">Username</label>
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <label for="password">Email Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
            </form>

            <small class="d-block text-center mt-3 ">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection