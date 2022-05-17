@extends('layouts.app')

@section('content')

<div class="container-cars">


    <h1 style="color:orangered; text-align : center;">Voici les voitures que nous avons trouvées pour vous.</h1>

@foreach( $voitures as $v)
<div class="car">
    <div class="car-img-container">
        <img src="{{$v->url}}" alt="car" class="car-img">
    </div>
    <div class="car-infos">

        <p>Voici notre <span style="color: orangered;">{{$v->marque}} {{$v->modele}}</span> de couleur {{$v->couleur}} ! Avec sa puissance de {{$v->chevaux}} chevaux, vous ne serez pas déçu.</p>
        <p>Immatriculation du véhicule : {{$v->immatriculation}}</p>
        <h3>Coût au /100km : <span style="color:red">{{$v->prix}} €.</span></h3>
    </div>

    <div class=reserve">
    <form class="bouton-reserve" method="POST" action="/addReserve">
        @csrf
        <input type="text" name="client_id" value="{{$client_id}}" style="display: none">
        <input type="text" name="voiture_id" value="{{$v->id}}" style="display: none">
        <input type="text" name="date1" value="{{$date1}}" style="display: none">
        <input type="text" name="date2" value="{{$date2}}" style="display: none">
        <input type="text" name="immatriculation" value="{{$v->immatriculation}}" style="display: none">
        <input type="submit"  value="Reserver cette voiture" name="searching"/>
    </form>
    </div>

</div>

@endforeach

    <h1 style="color:orangered; text-align : center; margin-top: 100px;">Il semblerait que ça soit déjà la fin des résultats....</h1>
    <button class="comeback"><a href="/home">Revenir à la page d'accueil</a></button>
</div>
@endsection
