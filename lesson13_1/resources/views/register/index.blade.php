@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1 class="text-center mt-4">Form Register</h1>
            <main class="form-register">
                <form>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" placeholder="name" name="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="username" placeholder="username" name="username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="password" name="password">
                        <label for="password">Password</label>
                    </div>
    
                    <button class="w-100 btn btn-lg btn-primary mt-2 mb-3" type="submit">Register</button>
                </form>
    
                <small class="d-block text-center mt-3">Already registration? <a href="/register">Login Now!</a></small>
            </main>
        </div>
    </div>
</div>
@endsection