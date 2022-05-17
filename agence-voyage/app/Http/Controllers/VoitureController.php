<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use App\Models\Voiturereservee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aeroport1 = $request->aeroport1;
        $date1 = $request->date1;
        $date2 = $request->date2;

        $client_id = Auth::id();

        $voitures = Voiture::where('idAeroport', '=', $aeroport1)
        ->whereRaw('isReserved = 0 OR (isReserved = 1 AND (? < dateReserv OR ? > dateRetour))', [$date2, $date1])
        ->get();
        return view("voiture/index", [
            "voitures" =>$voitures,
            "client_id" => $client_id,
            "date1" => $date1,
            "date2" => $date2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserve = new Voiturereservee;
        $reserve->idClient = $request->client_id;
        $reserve->idVoiture = $request->voiture_id;
        $reserve->immatriculation = $request->immatriculation;
        $reserve->dateReserv = $request->date1;
        $reserve->dateRetour = $request->date2;
        $reserve->save();

        return redirect('/reservations');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
