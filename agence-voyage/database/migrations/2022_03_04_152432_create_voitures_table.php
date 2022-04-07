<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string("url");
            $table->string('immatriculation');
            $table->string("marque");
            $table->string("modele");
            $table->string("annee");
            $table->string("chevaux");
            $table->string("couleur");
            $table->string("prix/100Km");
            $table->boolean("isReserved");
            $table->date("dateReserv")->nullable();
            $table->date("dateRetour")->nullable();
            $table->unsignedBigInteger("idAeroport");

            $table->foreign("idAeroport")->references("id")->on("aeroports")->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voitures');
    }
};
