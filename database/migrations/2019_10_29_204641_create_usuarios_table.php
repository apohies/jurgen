<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos')->nullable();
            $table->enum('documento',['CEDULA','PASAPORTE','CARNET EXTRANJERIA','NIT'])->default('CEDULA');
            $table->string('lugarExpedicion');
            $table->string('fechaExpedicion');
            $table->string('numeroDocumento');
            $table->string('rh');
            $table->string('fechaNacimiento');
            $table->string('lugarNacimiento');
            $table->string('sexo');
            $table->string('telefono')->nullable();
            $table->string('celular');
            $table->string('direccion');
            $table->string('email');
            $table->string('huella')->nullable();
            $table->string('firma')->nullable();
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
