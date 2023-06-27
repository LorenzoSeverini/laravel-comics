{{-- jumbotron the size is all the screen  --}}
<div class="jumbotron-section">
    <div class="jumbotron">
        {{-- img jumbotron  --}}
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </div>
</div>

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
