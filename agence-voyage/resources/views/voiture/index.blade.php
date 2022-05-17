@extends('layouts.app')

@section('content')

<div class="container-cars">

@foreach( $voitures as $v)
<div class="car">
    <div class="car-img">
        <img src="{{$v->url}}" alt="car">
    </div>
    <div class="car-infos">
        {{$v->immatriculation}}
        {{$v->modele}}
        {{$v->marque}}
        {{$v->chevaux}}
    </div>

    <form class="bouton-reserve" method="POST" action="/addReserve">
        @csrf
        <input type="text" name="client_id" value="{{$client_id}}" style="display: none">
        <input type="text" name="voiture_id" value="{{$v->id}}" style="display: none">
        <input type="text" name="date1" value="{{$date1}}" style="display: none">
        <input type="text" name="date2" value="{{$date2}}" style="display: none">
        <input type="text" name="immatriculation" value="{{$v->immatriculation}}" style="display: none">
        <input type="submit" class="reserve" value="Reserver cette voiture"/>
    </form>

</div>

@endforeach
</div>
@endsection
