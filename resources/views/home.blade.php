@extends('layout.nav')

@section('content')
<div class="container main-container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bienvenue {{ Auth::user()->name }} {{ Auth::user()->prenom }} !</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->admin === 1)
                        <h2 class="display-5">Vous êtes connecté en tant qu'administrateur !</h2>
                    @else
                        <h2 class="display-5">Vous êtes connecté !</h2>
                    @endif
                    <form class="update-form" method="POST" action="">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="name" value="{{ Auth::user()->name }}" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="prenom" value="{{ Auth::user()->prenom }}" placeholder="Prenom">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" placeholder="Adresse mel.">
                        </div>
                        <div class="row justify-content-center">
                            <div class=" col-sm d-flex justify-content-center">
                                <button type="submit" class="btn btn-block btn-warning" name="update">Modifier</button>
                            </div>
                            <div class="col-sm d-flex justify-content-center">
                                <button type="submit" class="btn btn-block btn-danger" name="delete">Supprimer</button>
                            </div>
                        </div>       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
