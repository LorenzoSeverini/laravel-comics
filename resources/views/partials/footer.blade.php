
<footer>
    {{-- footer top bar with links --}}
    <div class="footer-nav">
        <div class="footer-nav-container">
            <div class="row p-2">
                <div class="col-md-6">
                    <div class="row">
                        @foreach($footerNavLinks as $footerNavLink)
                            <div class="col-md-4 pt-5">
                                <div class="footer-nav-left-item">
                                    <h3>{{ $footerNavLink['name'] }}</h3>
                                    <ul>
                                        @foreach($footerNavLink['subMenu'] as $subMenuItem)
                                            <li>
                                                <a href="{{ $subMenuItem['href'] }}">{{ $subMenuItem['name'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-nav-right">
                        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo" class="img-fluid" height="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer bottom bar with sign up button on the left and social icons on the right --}}
    <div class="footer-bottom-bar my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-primary">Sign Up</button>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="social-icons">
                        <li><a target="_blank" href="https://www.facebook.com"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook"></a></li>
                        <li><a target="_blank" href="https://twitter.com"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter"></a></li>
                        <li><a target="_blank" href="https://www.pinterest.com"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Instagram"></a></li>
                        <li><a target="_blank" href="https://www.youtube.com"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Youtube"></a></li>
                        <li><a target="_blank" href="https://www.periscope.tv"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- <style>

    .footer-nav {
        background-image: url('{{ Vite::asset("resources/img/footer-bg.jpg") }}');
        background-size: cover;
        background-repeat: no-repeat;
        overflow-x: hidden;
    }
    .footer-nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 75rem;
        margin: 0 auto;
    }

    h3 {
        color: #fff;
        font-size: 2rem;
        font-weight: 600;
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    li {
        list-style: none;
        align-items: start
    }

    a {
        text-decoration: none;
        color: #fff;
        line-height: 2rem;
    }

    a:hover {
        text-decoration: none;
        color: #fff;
    }

    .footer-nav-left-item {
        padding: 0 1rem;
    }

    .footer-nav-right {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .footer-bottom-bar {
        padding: 1rem 0;
        max-width: 75rem;
        margin: 0 auto;
    }

    .social-icons {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .social-icons li {
        display: inline-block;
        margin-right: 1rem;
    }

    .social-icons li:last-child {
        margin-right: 0;
    }

    .social-icons li a {
        display: inline-block;
    }

    .social-icons li a img {
        width: 2rem;
        height: 2rem;
    }
</style> --}}
