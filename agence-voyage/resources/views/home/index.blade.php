@extends('layouts.app')

@section('content')


<main class="carform">
    <h1 class="head-title">LOCARS, votre agence de location de voitures.</h1>
    <form method="GET">
        <h3 class="sub-title">Selectionnez votre aéroport de départ</h3>
        <div class="flex-line">
            <div>
                <select name="aeroport" id="aeroport">
                    @foreach($aeroports as $aeroport)
                        <option value={{$aeroport->id}}>{{$aeroport->nom}} - {{$aeroport->ville}}</option>
                    @endforeach
                </select>
            </div>

            <label>Date retour
                <input type="date" name="date1">
            </label>
            <label>Heure retour
                <input type="time" name="temps1">
            </label>
        </div>

        <h3 class="sub-title2">Selectionnez votre aéroport de retour</h3>
    <div class="flex-line">
        <div>
            <select name="aeroport" id="aeroport">
                @foreach($aeroports as $aeroport)
                    <option value={{$aeroport->id}}>{{$aeroport->nom}} - {{$aeroport->ville}}</option>
                @endforeach
            </select>
        </div>

        <label>Date retour
            <input type="date" name="date2">
        </label>
        <label>Heure retour
            <input type="time" name="temps2">
        </label>
    </div>


        <input type="submit" value="Rechercher les voitures disponibles" name="search">
    </form>
</main>

@endsection
