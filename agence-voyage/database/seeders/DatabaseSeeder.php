<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "thibaut",
            'email' => 'thibaut@thibaut.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "fred",
            'email' => 'fred@fred.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "thibaut",
            'email' => 'thibaut@gmail.com',
            'password' => Hash::make('thibaut'),
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Paris Charles de Gaulle",
            'ville' => "Paris",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Paris Orly",
            'ville' => "Paris",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Nice",
            'ville' => "Nice",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Lyon saint exupéry",
            'ville' => "Lyon",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Marseille",
            'ville' => "Marseille",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Toulouse blagnac",
            'ville' => "Toulouse",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Figari sud Corse",
            'ville' => "porto Vecchio",
        ]);

        DB::table('aeroports')->insert([
            'nom' => "Clermont ferrand",
            'ville' => "Clermont ferrand",
        ]);

        DB::table('voitures')->insert([
            'url' => "https://cdn.discordapp.com/attachments/613321956711989249/961671207684550656/4.jpg",
            'immatriculation' => "DM-980-BA",
            'marque' => "Peugeot",
            'modele' => "3008",
            'chevaux' => "110",
            'couleur' => "noire",
            'prix' => "15",
            'annee' => "2015",
            'idAeroport' => 1,
        ]);
        DB::table('voitures')->insert([
            'url' => "https://cdn.discordapp.com/attachments/613321956711989249/961671207973974036/1.jpg",
            'immatriculation' => "AK-077-RZ",
            'marque' => "Opel",
            'modele' => "Corsa",
            'chevaux' => "125",
            'couleur' => "rouge",
            'prix' => "12",
            'annee' => "2009",
            'idAeroport' => 1,
        ]);
        DB::table('voitures')->insert([
            'url' => "https://cdn.discordapp.com/attachments/613321956711989249/961671208313700382/2.jpg",
            'immatriculation' => "DZ-652-TH",
            'marque' => "Seat",
            'modele' => "Ibiza",
            'chevaux' => "90",
            'couleur' => "bleue",
            'prix' => "20",
            'annee' => "2018",
            'idAeroport' => 1,
        ]);
        DB::table('voitures')->insert([
            'url' => "https://cdn.discordapp.com/attachments/613321956711989249/961671208527618068/3.jpg",
            'immatriculation' => "JZ-870-TY",
            'marque' => "Audi",
            'modele' => "A3",
            'chevaux' => "130",
            'couleur' => "grise",
            'prix' => "26",
            'annee' => "2020",
            'idAeroport' => 1,
        ]);

        DB::table('voiturereservees')->insert([
            'idClient' => "3",
            'idVoiture' => "4",
            'immatriculation' => "JZ-870-TY",
            'dateReserv' => '2022-04-14',
            'dateRetour' => '2022-04-18',
        ]);
    }
}
