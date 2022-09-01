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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->string('lieu');
            $table->string('duree');
            $table->date('date_depart');
            $table->date('date_retour');
            $table->integer('nbre_mili');
            $table->unsignedBigInteger('chefmission');
            $table->foreign('chefmission')->references('id')->on('chef_missions')->onDelete('cascade');
            $table->unsignedBigInteger('unite');
            $table->foreign('unite')->references('id')->on('chef_unites')->onDelete('cascade');
            $table->unsignedBigInteger('vehicule');
            $table->foreign('vehicule')->references('id')->on('vehicules')->onDelete('cascade');
           
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
        Schema::dropIfExists('missions');
    }
};
