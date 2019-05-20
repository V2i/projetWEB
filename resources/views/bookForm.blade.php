@extends('layout.nav')

@section('content')
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Réservation') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('houseStore') }}">
                                @csrf
                                <div class="form-group row justify-content-center">
                                    <label for="date_debut" class="col-md-2 col-form-label text-md-right">{{ __('Date de début') }}</label>
                                    <div class="col-md-8">
                                        <input type="date" id="date_debut" class="form-control @error('url') is-invalid @enderror" name="date_debut" value="{{ old('date_debut') }}" required autofocus>
                                    
                                        @error('date_debut')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label for="date_fin" class="col-md-2 col-form-label text-md-right">{{ __('Date de fin') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="date_fin" type="date" class="form-control @error('date_fin') is-invalid @enderror" name="date_fin" value="{{ old('date_fin') }}" required>
        
                                        @error('date_fin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm d-flex justify-content-center">
                                        <a href="{{route('house', ['maison_id' => $maison_id])}}" class="btn btn-secondary btn-block">Retour</a>
                                    </div>
                                    <div class="col-sm d-flex justify-content-center">
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection