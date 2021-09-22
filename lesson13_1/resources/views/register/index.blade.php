@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1 class="text-center mt-4">Form Register</h1>
            <main class="form-register">
                <form action="/register" method="post">
                    
                    {{-- preventing csrf --}}
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" required>
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror 
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required>
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror 
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required>
                        <label for="email">Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror 
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror 
                    </div>
    
                    <button class="w-100 btn btn-lg btn-primary mt-2 mb-3" type="submit">Register</button>
                </form>
    
                <small class="d-block text-center mt-3">Already registration? <a href="/register">Login Now!</a></small>
            </main>
        </div>
    </div>
</div>
@endsection