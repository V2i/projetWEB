@extends('layout.nav')

@section('content')
    <div class="container main-container">
        @auth
            @if(Auth::user()->admin === 1)
                <form method="GET" action="{{ route('houseCreate') }}">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter une maison</button>
                </form>
            @endif
        @endauth
        <div class="card-deck">
            <div class="row">
                @foreach ($houses as $house)
                    <div class="col-md-6">
                        <a href="{{ route('house', ['id' => $house -> maison_id]) }}" class="custom-card" >
                            <div class="card">
                            <img class="card-img-top img-fluid" src="{{ $house -> url }}" alt="Pas d'image disponible">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $house -> name }}</h4>
                                    <p class="card-text">{{ $house -> description }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{ $house -> ville }}, en {{ $house -> pays }}</small>
                                </div>
                            </div>
                        </a>
                        <div class="cheat-div"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection