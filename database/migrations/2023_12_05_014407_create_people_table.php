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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('identification_number', 12);//Número de documento
            $table->string('first_name', 50);//Primer nombre
            $table->string('middle_name', 50)->nullable();//Segundo nombre
            $table->string('last_name', 50);//Apellidos
            $table->string('address', 100);//Dirección
            $table->string('phone', 12);//Teléfono
            $table->string('city', 30);//Ciudad
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
        Schema::dropIfExists('people');
    }
};
