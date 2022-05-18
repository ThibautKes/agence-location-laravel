@extends('layouts.app')

@section('content')

    <div class="container-cars">


        <h1 style="color:orangered; text-align : center;">Voici vos dernières réservations se trouvent ici</h1>

@foreach ($reservations as $reservation)
    @foreach ($voitures as $voiture)
        @if($reservation->idVoiture == $voiture->id)

            <div class="car">

                <div class="car-img-container">
                    <img src="{{$voiture->url}}" alt="car" class="car-img"/>
                </div>

                <div class="car-infos">

                    <p><span style="color:red">Modèle : </span>{{$voiture->marque}} {{$voiture->modele}}</p>
                <p><span style="color:red">Immatriculation : </span>{{$voiture->immatriculation}}</p>
                    <p><span style="color:red">Aéroport de départ : </span>{{$voiture->aeroport->nom}}</p>
                <p><span style="color:red">Date de réservation : </span>{{$reservation->dateReserv}}</p>
                <p><span style="color:red">Date de retour : </span>{{$reservation->dateRetour}}</p>
                    <p><span style="color:red">Prix au 100km : </span>{{$voiture->prix}} €</p>

                </div>
                <div class="reserve">

                <form action="/deleteReservation" method="POST" class="bouton-reserve">
                    @csrf
                    <input type="hidden" name="idReservation" value="{{$reservation->id}}">
                    <input type="submit" value="Annuler la reservation">
                </form>
                </div>
            </div>

        @endif
    @endforeach


@endforeach

        <h1 style="color:orangered; text-align : center; margin-top: 100px;">Il semblerait que ça soit déjà la fin des résultats....</h1>
        <button class="comeback"><a href="/home">Revenir à la page d'accueil</a></button>

    </div>

@endsection
