@extends('layout.nav')

@section('content')
    <div class="container main-container">
        @auth
            @if(Auth::user()->admin === 1)
                <div class="row">
                    <div class="col-md">
                        <form method="GET" action="{{ route('housePicture', ['id' => $maison -> id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Gerer les photos</button>
                        </form>
                    </div>
                    <div class="col-md">
                        <form method="POST" action=" {{ route('houseEdit', ['id' => $maison -> id]) }}">
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-warning btn-lg btn-block">Modifier</button>
                        </form>
                    </div>
                    <div class="col-md">
                        <form method="POST" action="{{ route('houseDelete', ['id' => $maison -> id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-lg btn-block">Supprimer</button>
                        </form>
                    </div>
                </div>
            @endif
        @endauth
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://zupimages.net/up/19/20/no7f.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://zupimages.net/up/19/20/0bkw.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://zupimages.net/up/19/20/lq3s.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Precedent</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$maison -> name}}</h3>
                        <p class="card-text">{{$maison -> description}}</p>
                        @if(empty($maison -> adresse2))
                            <p class="card-text">{{$maison -> adresse1}}</p>
                        @else
                        <p class="card-text">{{$maison -> adresse1}}, {{$maison -> adresse2}}</p>
                        @endif
                        <p class="card-text">{{$maison -> ville}}, {{$maison -> pays}}</p>
                        <p class="card-text">Hôte : {{ $user-> prenom}} {{ $user-> name}}</p>
                        <p class="display-4 text-right">{{$maison -> prix_hors_saison}} €/Semaine</p>
                        <a href="#" class="btn btn-primary">Reserver</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="{{$maison -> id}}" style="display: none">
            <form class="" method="POST">
                @csrf
                @method('put')
            </form>
        </div>
    </div>
@endsection