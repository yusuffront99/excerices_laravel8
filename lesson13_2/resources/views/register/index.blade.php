@extends('layouts.main')

@section('container')
    <div class="container mt-3">
        <div class="justify-content-center">
            <h3>Form Register</h3>
            @csrf
            <form action="/register" method="post">
                <ul>
                    <li>
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name">
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </li>
                </ul>
                <ul>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </li>
                </ul>
                <button class="btn-primary d-flex flex-column" type="submit">Register</button>
            </form>
            

            <small><a href="/login">Login Now</a></small>
        </div>
    </div>
@endsection