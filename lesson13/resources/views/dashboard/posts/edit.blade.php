@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Updade Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/{{$post->slug}}}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control  @error('title')is-invalid @enderror" id="title" name="title" required autofocus value="{{old('title', $post->title)}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label @error('slug', $post->slug)is-invalid @enderror">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required value="{{old('slug',$post->slug)}}">
            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        </div>

        <div class="mb-3">
            <label for="category">Category</label>
            <select name="category_id" class="form-select" aria-label="Default select example">
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category->id) == $category->id){
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    }@else{
                        <option value="{{$category->id}}" >{{$category->name}}</option>
                    }@endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            @error('content')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <input id="content" type="hidden" name="content" value="{{old('content', $post->content)}}">
            <trix-editor input="content"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(Response => Response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault()
    });
</script>
@endsection

