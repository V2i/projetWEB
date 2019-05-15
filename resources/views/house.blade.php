@extends('layout.nav')

@section('content')
    <div class="container">
        <form method="GET" action="{{ route('house/create') }}">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Ajouter une maison</button>
        </form>
    </div>
@endsection