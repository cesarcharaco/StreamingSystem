<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_agencia');
            $table->float('monto');
            $table->unsignedBigInteger('id_zona');

            $table->foreign('id_zona')->references('id')->on('zonas')->onDelete('cascade');
            $table->foreign('id_agencia')->references('id')->on('agencias')->onDelete('cascade');
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
        Schema::dropIfExists('tarifas');
    }
}
