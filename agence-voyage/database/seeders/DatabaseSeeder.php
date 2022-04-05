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

        DB::table('voitures')->insert([
            'url' => "/images/voitures/". rand(1, 4). ".jpg",
            'title' => "Voiture Aléatoire 1",
            'user_id' => 1,
        ]);
        DB::table('voitures')->insert([
            'url' => "/images/voitures/". rand(1, 4). ".jpg",
            'title' => "Voiture Aléatoire 1",
            'user_id' => 2,
        ]);
        DB::table('voitures')->insert([
            'url' => "/images/voitures/". rand(1, 4). ".jpg",
            'title' => "Voiture Aléatoire 3",
            'user_id' => 1,
        ]);
        DB::table('voitures')->insert([
            'url' => "/images/voitures/". rand(1, 4). ".jpg",
            'title' => "Voiture Aléatoire 4",
            'user_id' => 2,
        ]);
    }
}
