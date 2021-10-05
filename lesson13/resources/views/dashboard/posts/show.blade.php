@extends('dashboard.layouts.main')



@section('container')
<div class="container my-3">
    <div class="row">
        <article class="col-lg-8">
            <h3 class="card-title text-center">{{$post->title}}</h3><hr>
            <a href="/dashboard/posts" class="btn btn-success btn-sm">Back to My Post</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <form action="/dashboard/posts/{{$post->slug}}" class="d-inline mb-4" method="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form><br>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden" class="mt-3">
                    <img src="{{asset('storage/' . $post->image)}}">
                </div>
            @else
                <img src="https://source.unsplash.com/1600x600?{{$post->category->name}}" class="card-img-top mt-3" alt="{{$post->category->name}}">
            @endif
    
                
            <p class="card-text">{!!$post->content!!}</p>
        </article>
    </div>
</div>
@endsection