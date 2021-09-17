@extends('layouts.main')

@section('container')
    <div class="container mt-4">
        @foreach ($categories as $category)
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$name}}</li>
                </ul>
                <div class="card-footer">
                    Card footer
                </div>
            </div>
        @endforeach
    </div>
@endsection