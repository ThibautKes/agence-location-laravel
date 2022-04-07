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
        Schema::create('voiturereservees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idClient");
            $table->unsignedBigInteger("idVoiture");
            $table->string("immatriculation");
            $table->date("dateReserv");
            $table->date("dateRetour");

            $table->foreign("idClient")->references('id')->on("users")->onDelete("restrict");
            $table->foreign("idVoiture")->references("id")->on("voitures")->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voiturereservees');
    }
};
