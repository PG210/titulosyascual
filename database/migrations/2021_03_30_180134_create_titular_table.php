<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titular', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idtipodocumento');
            $table->foreign('idtipodocumento')->references('id')->on('tipodocumento');
            $table->string('cedula', 11);
            $table->string('nombres', 100);//tipo entero
            $table->string('apellidos', 100);//tipo flotante
            $table->string('direccion', 100);
            $table->string('telefono', 10);
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
        Schema::dropIfExists('titular');
    }
}
