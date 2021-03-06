@extends('layout.nav')

@section('content')
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter un admin') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('adminStore') }}">
                                @csrf
                                @method('put')
                                <div class="form-group row justify-content-center">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Adresse mel.') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
        
                                        @error('email')
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
                            <div class="row justify-content-center">
                                <div class="table-responsive-md table table-striped">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Prenom</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Adresse mel.</th>
                                                <th scope="col">Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($admins as $admin)
                                                <tr>
                                                    <th scope="row">{{ $admin -> id }}</th>
                                                    <td>{{ $admin -> prenom }}</td>
                                                    <td>{{ $admin -> name }}</td>
                                                    <td>{{ $admin -> email }}</td>
                                                    <td>
                                                        <form method="POST" action="{{ route('adminDelete', ['id' => $admin -> id]) }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection