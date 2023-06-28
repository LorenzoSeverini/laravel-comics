@extends('layouts.app')
@section('page-title', 'Comics1')
@section('content')
<div class="container my-3">
    <h1>Comics1 Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>This is the comics1 page, with a different content for sure</p>
                <a class="text-danger" href="{{route("home")}}">back to home page</a>
            </div>
        </div>
    </div>
</div>
@endsection
