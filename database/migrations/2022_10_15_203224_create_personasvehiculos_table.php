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
        Schema::create('personasvehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idVehiculo');
            $table->unsignedBigInteger('idPersona');
            $table->foreign('idVehiculo')->references('id')->on('vehiculos')->onDelete('cascade');;
            $table->foreign('idPersona')->references('id')->on('personas')->onDelete('cascade');;
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
        Schema::dropIfExists('personasvehiculos');
    }
};
