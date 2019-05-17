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

            <ul>
                @foreach ($houses as $house)
                    <li><a href="{{ route('house', ['id' => $house -> id]) }}" >{{ $house -> name }}</a></li>
                @endforeach
            </ul>
    </div>
@endsection