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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('plate', 6)->unique(); //Placa del vehículo
            $table->string('color', 20); //Color del vehículo
            $table->string('brand', 50); //Marca del vehículo
            $table->enum('vehicle_type', ['particular', 'publico']);//Tipo de vehículo
            $table->unsignedBigInteger('driver_id')->nullable(); //ID del conductor
            $table->unsignedBigInteger('owner_id')->nullable(); //ID del propietario
            $table->timestamps();

            $table->foreign('driver_id')->references('id')->on('people')->onDelete('set null');
            $table->foreign('owner_id')->references('id')->on('people')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
