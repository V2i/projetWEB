@extends('layout.nav')

@section('content')
    <div class="container main-container">
        @auth
            @if(Auth::user()->admin === 1)
                <form method="GET" action="{{ route('housePicture', ['id' => $maison -> id]) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Gerer les photos</button>
                </form>
                <form method="POST" action=" {{ route('houseEdit', ['id' => $maison -> id]) }}">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-warning btn-lg btn-block">Modifier</button>
                </form>
                <form method="POST" action="{{ route('houseDelete', ['id' => $maison -> id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-lg btn-block">Supprimer</button>
                </form>
            @endif
        @endauth
        {{ $maison -> id }}
    </div>
@endsection