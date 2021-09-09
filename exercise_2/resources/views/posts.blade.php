@extends('layouts.main')

@section('container')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text" style="color:rgb(75, 56, 250)">{{$content}}</p>
                <a href="/posts/post" class="btn btn-primary">Details</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection