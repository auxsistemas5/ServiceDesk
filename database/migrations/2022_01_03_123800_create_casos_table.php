<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casos', function (Blueprint $table) {
            $table->id();
            $table->string('SOLICITANTE', 100);
            $table->string('PRIORIDAD', 20);
            $table->string('DESCRIPTION', 500);
            $table->string('AREA', 100);
            $table->string('AREADESTINO', 50);
            $table->string('TIPODAÑO',100);
            $table->string('USUARIOASIGNADO', 100);
            $table->string('ESTADO', 50)->default('Abierto');
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
        Schema::dropIfExists('casos');
    }
}
