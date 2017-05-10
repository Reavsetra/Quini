<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('principal')->create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nombre');
            $table->string('nombre_usuario');
            $table->string('direccion');
            $table->string('fecha_nacimiento');
            $table->string('email');
            $table->string('password');
            $table->string('creditos');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
