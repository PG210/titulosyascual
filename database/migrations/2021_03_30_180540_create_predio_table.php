<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePredioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predio', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 20);
            $table->string('nombre', 100);
            $table->unsignedBigInteger('idtitular');
            $table->foreign('idtitular')->references('id')->on('titular');
            $table->unsignedBigInteger('idsucesor');
            $table->foreign('idsucesor')->references('id')->on('sucesor');
            $table->unsignedBigInteger('idvereda');
            $table->foreign('idvereda')->references('id')->on('vereda');
            $table->string('archivo', 100);
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
        Schema::dropIfExists('predio');
    }
}
