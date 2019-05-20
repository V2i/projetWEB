<!doctype html>
<!--
⠟⠛⣉⣡⣴⣶⣶⣶⣶⣶⣶⣤⣉⡛⢿⣿⣿⠿⠟⠛⣋⣉⣩⣭⣭⣭⣉⣙⠛⠈
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠡⣴⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠁⠆⠄⠈⢻⣿⣿⣿⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⠋⠰⠄⠙⣿
⣿⣿⣿⣿⣿⣿⣿⣔⡗⠠⢀⣼⣿⣿⣿⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣀⠘⠠⢀⣼
⡉⠛⠿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⣋⣡⡈⠛⠛⠛⠿⠿⠿⠿⠿⠿⠿⠿⠿⠿⠿
⠿⠷⠶⣦⣭⣉⣉⣉⣉⣭⡥⣴⡿⠿⢟⣠⣿⣿⣿⣷⣶⣶⣶⣶⣶⣶⣶⣶⣶⣶
⣿⣷⣶⣶⣤⣬⣭⣽⣿⣿⠖⣠⣶⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠛⠁
⣿⣿⣿⣿⡿⠿⠛⣫⣥⣴⣾⣿⣿⣿⣿⣿⣷⣤⣝⠛⢛⣫⣭⣭⣭⣭⣅⠄⠄⠄
⣿⣿⣿⣿⣶⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣼⣿⣿⣿⣿⣿⣿⣷⡀⠄
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡄
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣶⣶⣶⣮⣭⣉⣙⡛⠿⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠟⢛⣉⣭
⣛⣛⣛⡛⠻⠿⢿⣿⣿⣶⣶⣶⣶⣦⣤⣬⣭⣭⣭⣭⣭⣭⣭⣭⣴⣾⣿⣿⣿⡿
⢿⣿⣿⣿⣿⣷⣶⣦⣭⣭⣭⣭⣍⣉⣉⣉⣛⣛⠛⠛⠛⠛⠛⠛⠛⢛⣋⣭⣄⠄
⣶⣦⣬⣍⣙⣛⠛⠛⠛⠿⠿⠿⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠋⠄

        D O N T  T O U C H  I T
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>House4you</title>

        <!-- Script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Fonts & style-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="{{secure_asset('css/custom.css')}}"> <!--heroku-->
        <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}"> <!--local-->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body>
        <header>
            <!-- jumbotron-->
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Your vacation</h1>
                    <p class="lead">Just have it when you need it</p>
                </div>
            </div>
            <!-- navbar-->
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <a class="navbar-brand" href="{{route('welcome')}}"><i class="fas fa-home"></i>House4you</a>

                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        @auth
                            @if(Auth::user()->admin === 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin') }}">Admin</a>
                                </li>
                            @endif
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('houses') }}">Maisons</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a  class="nav-link" href="{{route('home')}}">
                                    {{ Auth::user()->prenom }} <span class="caret"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <!-- main section-->
        <main>
            @include('layout.flash-message')
            @yield('content')

        </main>
        <!-- Footer -->
        <footer class="page-footer font-small pt-4">
            <div class="container-fluid text-center text-md-left bg-dark">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3 foot-style">
                        <h5 class="text-uppercase">House4you</h5>
                        <p class="footer-link">Your vacation, just have it when you need it.</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mt-md-0 mt-3 foot-style">
                        <h5 class="text-uppercase">Pour mieux nous connaître</h5>
                        <ul class="list-unstyled">
                            <li>
                            <a class="foot-link" href="{{route('welcome')}}">Page d'accueil</a>
                            </li>
                            <li>
                                <a class="foot-link" href="{{route('welcome')}}#contact">Nous contacter</a>
                            </li>
                            <li>
                                <a class="foot-link" href="{{route('welcome')}}#about">A propos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mt-md-0 mt-3 foot-style">
                        <h5 class="text-uppercase">Autre liens</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="foot-link" href="#!"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a class="foot-link" href="https://www.instagram.com/homee4you/?hl=fr"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a class="foot-link" href="#!"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!--copyright-->
        <div class="footer-copyright text-center py-3 bg-dark">© 2019 Copyright : V2i</div>
        </footer>
        <script src="{{URL::asset('/js/custom.js')}}" type="text/javascript"></script>
        <script src="{{secure_asset('/js/custom.js')}}" type="text/javascript"></script>
    </body>
</html>