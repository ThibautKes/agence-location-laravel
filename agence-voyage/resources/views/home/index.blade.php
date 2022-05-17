@extends('layouts.app')

@section('content')


<main class="carform">
    <h1 class="head-title">LOCARS, votre agence de location de voitures.</h1>
    <form method="GET" action="{{ route('voiture') }}">
        <h3 class="sub-title">Selectionnez votre aéroport de départ</h3>
        <div class="flex-line">
            <div>
                <select name="aeroport1" id="aeroport1">
                    @foreach($aeroports as $aeroport)
                        <option value={{$aeroport->id}}>{{$aeroport->nom}} - {{$aeroport->ville}}</option>
                    @endforeach
                </select>
            </div>
            <label for="date1">Date départ
                <input type="date" name="date1">
            </label>
        </div>

        <h3 class="sub-title2">Selectionnez votre aéroport de retour</h3>
    <div class="flex-line">
        <div>
            <select name="aeroport2" id="aeroport2">
                @foreach($aeroports as $aeroport)
                    <option value={{$aeroport->id}}>{{$aeroport->nom}} - {{$aeroport->ville}}</option>
                @endforeach
            </select>
        </div>
        <label for="date2">Date retour
            <input type="date" name="date2" id="date2">
        </label>
    </div>


        <input type="submit" value="Rechercher les voitures disponibles" name="search">
    </form>
</main>

@endsection
