
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1>Comics</h1>
        </div>
    </div>
    <div class="row">
      @foreach ($comics as $comic)
        <div class="col-6 col-md-4 col-lg-2 mb-4 container-comcis">
            <div class="comic-card">
                <a href="href={{route("comics1")}}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </a>
            </div>
            <div class="card-title">
                <small>{{ $comic['title'] }}</small>
            </div>
        </div>
      @endforeach
    </div>
    {{-- button to show all comics in the database --}}
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <a href="#" class="btn btn-primary">Show all comics</a>
      </div>
    </div>
</div>

<style>

    .container {
        max-width: 75rem;
        margin: 0 auto;
    }
    .comic-card {
        height: 20rem;
        display: flex;
    }

    .comic-card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, .3);
        transition: all .3s ease-in-out;
        cursor: pointer;
    }

    a {
        text-decoration: none;
    }

    a img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .comic-card:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, .5);
    }

    .card-title {
        padding: 10px;
        text-align: center;
    }

    .comic-card h3 {
      margin: 0;
    }
</style>

