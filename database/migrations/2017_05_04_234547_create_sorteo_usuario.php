<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSorteoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sorteo_usuario', function (Blueprint $table) {
            $table->primary('id_usuario')->references('id_usuario')->on('usuarios');
            $table->primary('id_sorteo')->references('id_sorteo')->on('sorteo')->onUpdate('cascade');
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
        Schema::dropIfExists('sorteo_usuario');
    }
}
