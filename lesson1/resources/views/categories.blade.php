@extends('layouts.main')

@section('container')
<h1 class="mb-4">Post category</h1>
<div class="row">
    @foreach($categories as $category)
        <ul>
            <li>
                <h3>
                    <a href="/categories/{{$category->slug}}">{{$category->name}}</a>
                </h3>
            </li>
        </ul>
    @endforeach
</div>
@endsection
