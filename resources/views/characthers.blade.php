@extends('layouts.app')
@section('page-title', 'Title Override: Characthers Page')
@section('content')
<div class="container my-3">
    <h1>Characthers Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>This is the characthers page, with a different content for sure</p>
                <a class="text-danger" href="{{route("home")}}">back to home page</a>
            </div>
        </div>
    </div>
</div>
@endsection

