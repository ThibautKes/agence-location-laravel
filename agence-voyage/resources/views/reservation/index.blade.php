@extends('layouts.app')

@section('content')

@foreach ($reservations as $reservation)

    @foreach ($voitures as $voiture)
        @if($reservation->idVoiture == $voiture->id)
            <h2>{{$voiture->immatriculation}}</h2>
            <img src="{{$voiture->url}}"/>
            <h2>{{$reservation->dateReserv}}</h2>
            <h2>{{$reservation->dateRetour}}</h2>
            <form action="/deleteReservation" method="POST">
                @csrf
                <input type="hidden" name="idReservation" value="{{$reservation->id}}">
                <input type="submit" value="Annuler la reservation">
            </form>
        @endif
    @endforeach


@endforeach

@endsection
