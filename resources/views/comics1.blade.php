@extends('layouts.app')
@section('page-title', 'Comics 1')
@section('content')
<div class="container my-3">
    <h1>Other Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>This is another page, with a different content for sure</p>
                <a href="{{route("home")}}">back to home page</a>
            </div>
        </div>
    </div>

</div>
@endsection