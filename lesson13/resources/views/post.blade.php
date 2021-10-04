@extends('layouts.main')

@section('container')
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <article class="col-sm-8">
                <h3 class="card-title text-center">{{$post->title}}</h3><hr>
                <p class="card-text"><small>Wrote by : <a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a> </small></p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{asset('storage/' . $post->image)}}" class="card-img-top mt-3" alt="{{$post->category->name}}">
                        <a href="">{{$post->category->name}}</a>
                        
                    </div>
                    @else
                        <img src="https://source.unsplash.com/1600x600?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
                    @endif
                <p class="card-text">{!!$post->content!!}</p>
                <a href="/posts" class="btn btn-primary">Back to Main</a>
            </article>
        </div>
    </div>
@endsection