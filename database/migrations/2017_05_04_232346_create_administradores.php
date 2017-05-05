<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('administracion')->create('administradores', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->string('nombre_admin');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->integer('id_tipo_admin')->references('id_tipo_admin')->on('tipo_administrador');

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
        Schema::dropIfExists('administradores');
    }
}
