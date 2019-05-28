@extends('layout.nav')

@section('content')
    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Vous avez actuellement {{$count}} réservations.</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    @foreach ($reservations as $reservation)
                                    <a href="{{ route('house', ['id' => $reservation -> maison_id]) }}" class="custom-card" >
                                        <div class="card flex-row flex-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card-header border-0">
                                                        <img src="{{$reservation -> url}}" alt="Pas de photo disponible" class="d-block w-100">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 align-self-center text-center">
                                                    <div class="card-block px-2">
                                                        <h3 class="card-title">{{$reservation -> titre}}</h3>
                                                        <p class="card-text">{{$reservation -> description}}</p>
                                                        <p class="card-text">Du : {{$reservation -> date_debut}} au {{$reservation -> date_fin}}.</p>
                                                    <form method="POST" action="{{route('reservationDelete')}}">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="hidden" value="{{$reservation -> id}}" name="id">
                                                            <button type="submit" class="btn btn-default"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                    <div class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
