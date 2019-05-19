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
                        <button type="submit" class="btn btn-warning btn-lg btn-block" onclick="modal({{$maison->id}})">Modifier</button>
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
                        @foreach ($photos as $photo)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop -> index}}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach ($photos as $photo)
                            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                <img class="d-block w-100" src="{{ $photo -> url }}" alt="{{ $photo -> type_photo }}">
                            </div>
                        @endforeach
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
                        <p><h5 class="card-text">{{$maison -> description}}</h5></p>
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
        <div id="{{$maison -> id}}" style="display: none" class="modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modification</h5>
                        <button type="button" class="close" onclick="closeModal({{$maison->id}})">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('houseEdit', ['maison_id' => $maison -> id]) }}">
                            @csrf
                            @method('put')
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la maison') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $maison -> name }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adresse1" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
    
                                <div class="col-md-6">
                                    <input id="adresse1" type="text" class="form-control @error('adresse1') is-invalid @enderror" name="adresse1" value="{{ $maison -> adresse1 }}" required autocomplete="adresse1">
    
                                    @error('adrese')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="adresse2" class="col-md-4 col-form-label text-md-right">{{ __('Adresse complémentaire') }}</label>
    
                                <div class="col-md-6">
                                    <input id="adresse2" type="text" class="form-control @error('adresse2') is-invalid @enderror" name="adresse2" value="{{ $maison -> adresse2 }}" autocomplete="adresse2">
    
                                    @error('adrese2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
    
                                <div class="col-md-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ $maison -> ville }}" required autocomplete="ville">
    
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>
    
                                <div class="col-md-6">
                                    <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ $maison -> pays }}" required autocomplete="pays">
    
                                    @error('pays')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prix_hors_saison" class="col-md-4 col-form-label text-md-right">{{ __('Prix par semaine (hors saison)') }}</label>
    
                                <div class="col-md-6">
                                    <input id="prix_hors_saison" type="text" class="form-control @error('prix_hors_saison') is-invalid @enderror" name="prix_hors_saison" value="{{ $maison -> prix_hors_saison }}" autocomplete="prix_hors_saison">
    
                                    @error('prix_hors_saison')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prix_saison" class="col-md-4 col-form-label text-md-right">{{ __('Prix par semaine (saison)') }}</label>
    
                                <div class="col-md-6">
                                    <input id="prix_saison" type="text" class="form-control @error('prix_saison') is-invalid @enderror" name="prix_saison" value="{{ $maison -> prix_saison }}" autocomplete="prix_saison">
    
                                    @error('prix_saison')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
    
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{ $maison -> description }}</textarea>
    
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="closeModal({{$maison->id}})">Fermer</button>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection