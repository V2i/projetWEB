@extends('layout.nav')

@section('content')
    <div class="container main-container">
            <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header">{{ __('Ajouter une photo') }}</div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('pictureStore', ['maison_id' => $maison_id]) }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="url" class="col-md-2 col-form-label text-md-right">{{ __('URL') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autofocus>
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Description') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required>
                
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
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
        @foreach ($photos as $photo)
            {{ $photo -> url}}
        @endforeach
    </div>
@endsection