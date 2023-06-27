@extends('layouts.app')

@section('content')
<div class="jumbotron-section">
    @include('partials.jumbotron')
</div>

<div class="comics-section">
    @include('partials.comicsSection')
</div>
@endsection

<style>
    .jumbotron-section {
        padding-top: 92px;
        margin-top: -92px;
    }

    .jumbotron-section img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
