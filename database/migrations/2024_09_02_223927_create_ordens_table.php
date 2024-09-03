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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
 
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('id_dispositivo');
 
            $table->foreign('id_dispositivo')->references('id')->on('dispositivos');
            $table->unsignedBigInteger('id_tecnico');
 
            $table->foreign('id_tecnico')->references('id')->on('tecnicos');
            $table->date('fecha');
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
        Schema::dropIfExists('ordens');
    }
};
