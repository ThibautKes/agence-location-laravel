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
            $table->increments("id");
            $table->unsignedInteger("idclient");
            $table->string("immatriculation");
            $table->date("dateReserv");
            $table->date("dateRetour");
            
            $table->foreign("idclient")->references("id")->on("users")->onDelete("restrict");
           // $table->foreign('immatriculation')->references('immatriculation')->on('voitures')->onDelete('cascade');
           // $table->foreign('dateReserv')->references('dateReserv')->on('voitures')->onDelete('cascade');
            //$table->foreign('dateRetour')->references('dateRetour')->on('voitures')->onDelete('cascade');
            $table->timestamps();
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
