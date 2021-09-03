@extends('layouts.main')

@section('content')
@foreach ($posts as $post)
    <div class="container text-center mt-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">

                <h5 class="card-title"> {{$post['title']}} </h5>
                <p class="card-text"> {{$post['body']}} </p>
                <a href="blog/{{$post['slug']}}" class="btn btn-primary">Details</a>
            </div>
            </div>
    </div>
    @endforeach

@endsection