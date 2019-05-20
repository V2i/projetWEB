@extends('layout.nav')

@section('content')
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter une photo') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pictureStore', ['maison_id' => $maison_id]) }}">
                                @csrf
                                <div class="form-group row justify-content-center">
                                    <label for="url" class="col-md-2 col-form-label text-md-right">{{ __('URL') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label for="type_photo" class="col-md-2 col-form-label text-md-right">{{ __('Type de photo') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="type_photo" type="text" class="form-control @error('type_photo') is-invalid @enderror" name="type_photo" value="{{ old('type_photo') }}" required>
        
                                        @error('type_photo')
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
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    @foreach ($photos as $photo)
                                        <div class="card flex-row flex-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card-header border-0">
                                                        <img src="{{$photo -> url}}" alt="Pas de photo disponible" class="d-block w-100">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 align-self-center text-center">
                                                    <div class="card-block px-2">
                                                        <h3 class="card-title">{{$photo -> type_photo}}</h3>
                                                        <p class="card-text">{{$photo -> url}}</p>
                                                        <form method="POST" action="{{ route('pictureDelete', ['id' => $photo -> id]) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="hidden" value="{{$photo -> id}}" name="id">
                                                            <input type="hidden" value="{{$photo -> maison_id}}" name="maison_id">
                                                            <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection