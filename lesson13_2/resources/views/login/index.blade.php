@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="justify-content-center">
            <h4>Form Login</h4>
            @if (session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif
            <form action="">
                <ul>
                    <li>
                        <label for="email">Nama</label>
                        <input type="email" name="email" id="email">
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="password">Nama</label>
                        <input type="password" name="password" id="password">
                    </li>
                </ul>
                <ul>
                    <li>
                        <button class="btn-primary d-flex" type="submit">Register</button>
                    </li>
                </ul>
            </form>
            <small class="mt-2"><a href="/register">Register Now?</a></small>
        </div>
    </div>
@endsection