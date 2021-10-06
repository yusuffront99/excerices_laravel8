@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session()->has('danger'))
    <div class="alert alert-danger col-lg-8" role="alert">
        {{session('danger')}}
    </div>
@endif

<div class="table-responsive col-lg-9">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new Category</a>
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="/dashboard/categories/{{$category->slug}}" class="btn btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>
                    <a href="/dashboard/categories/{{$category->slug}}/edit" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <form action="/dashboard/categories/{{$category->slug}}" class="d-inline" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection