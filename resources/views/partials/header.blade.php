<header>
    <div class="navbar navbar-expand navbar-white bg-white p-3">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($links as $link)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>

<style>
    header {
        background-color: #fff;
    }

    .navbar {
        max-width: 75rem;
        margin: 0 auto;
    }
</style>

