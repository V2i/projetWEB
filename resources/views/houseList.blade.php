@extends('layout.nav')

@section('content')
    <div class="container main-container">
        @auth
            @if(Auth::user()->admin === 1)
                <form method="GET" action="{{ route('housecreate') }}">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter une maison</button>
                </form>
            @endif
        @endauth
        <div class="card-deck">
            @foreach ($houses as $house)
                <a href="{{ route('house', ['id' => $house -> id]) }}" class="custom-card" >
                    <div class="card">
                        <img class="card-img-top img-fluid" src="https://drive.google.com/drive/folders/1baiHsM9t0av6w4xsP7mx_Qdn1N5NcKyo" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $house -> name }}</h4>
                            <p class="card-text">{{ $house -> description }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection