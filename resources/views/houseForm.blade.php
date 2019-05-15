@extends('layout.nav')

@section('content')
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter une maison') }}</div>
            
                        <div class="card-body">
                            <form method="POST" action="{{ route('') }}">
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom de la maison') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
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
                                        <input id="adresse1" type="text" class="form-control @error('adresse1') is-invalid @enderror" name="adresse1" value="{{ old('adresse1') }}" required autocomplete="adresse1">
        
                                        @error('adrese')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="adresse2" class="col-md-4 col-form-label text-md-right">{{ __('Adresse complémantaire') }}</label>
        
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
                                        <input id="prix_hors_saison" type="number" class="form-control @error('prix_hors_saison') is-invalid @enderror" name="prix_hors_saison" value="{{ old('prix_hors_saison') }}" autocomplete="prix_hors_saison">
        
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
                                        <input id="prix_saison" type="number" class="form-control @error('prix_saison') is-invalid @enderror" name="prix_saison" value="{{ old('prix_saison') }}" autocomplete="prix_saison">
        
                                        @error('prix_saison')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prix_saison" class="col-md-4 col-form-label text-md-right">{{ __('Prix par semaine (saison)') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="prix_saison" type="number" class="form-control @error('prix_saison') is-invalid @enderror" name="prix_saison" value="{{ old('prix_saison') }}" autocomplete="prix_saison">
        
                                        @error('prix_saison')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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