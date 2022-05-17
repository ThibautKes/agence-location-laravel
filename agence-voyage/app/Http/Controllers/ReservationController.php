<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voiturereservee;
use App\Models\Voiture;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Voiturereservee::where('idClient', Auth::id())
            ->get();
        $voitures = Voiture::All();
        return view('reservation/index', [
            "reservations" => $reservations,
            "voitures" => $voitures
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request) {
        $reservation = Voiturereservee::where('id', $request->idReservation);
        $reservation->delete();

        $reservations = Voiturereservee::where('idClient', Auth::id())
        ->get();
        $voitures = Voiture::All();

        return view('/reservation/index', [
            "reservations" => $reservations,
            "voitures" => $voitures
        ]);
    }
}
