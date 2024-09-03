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
        Schema::create('descripcion_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('precio');
            $table->unsignedBigInteger('id_orden');
 
            $table->foreign('id_orden')->references('id')->on('ordens');
            $table->unsignedBigInteger('id_servicio');
 
            $table->foreign('id_servicio')->references('id')->on('servicios');
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
        Schema::dropIfExists('descripcion_servicios');
    }
};
