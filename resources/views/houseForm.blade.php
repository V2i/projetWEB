@extends('layout.nav')

@section('content')
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter une maison') }}</div>
            
                        <div class="card-body">
                            <form method="POST" action="{{ route('houseStore') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la maison') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="titre" type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre') }}" required autocomplete="titre" autofocus>
        
                                        @error('titre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="adresse1" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="adresse1" type="text" class="form-control @error('adresse1') is-invalid @enderror" name="adresse1" value="{{ old('adresse1') }}" required autocomplete="adresse1">
        
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
                                        <input id="adresse2" type="text" class="form-control @error('adresse2') is-invalid @enderror" name="adresse2" value="{{ old('adresse2') }}" autocomplete="adresse2">
        
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
                                        <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville">
        
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
                                        <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required autocomplete="pays">
        
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
                                        <input id="prix_hors_saison" type="text" class="form-control @error('prix_hors_saison') is-invalid @enderror" name="prix_hors_saison" value="{{ old('prix_hors_saison') }}" autocomplete="prix_hors_saison">
        
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
                                        <input id="prix_saison" type="text" class="form-control @error('prix_saison') is-invalid @enderror" name="prix_saison" value="{{ old('prix_saison') }}" autocomplete="prix_saison">
        
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
                                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description"></textarea>
        
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Ajouter') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection