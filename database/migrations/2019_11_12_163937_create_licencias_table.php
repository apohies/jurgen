<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuarios_id');
            $table->string('numero_licencia');
            $table->string('fechaExpedicion');
            $table->string('fechaVecimiento');
            $table->string('categoriaLicencia');
            $table->enum('estado',['Activa','Vencida','En Proceso'])->default('En Proceso');
            $table->string('OficinaExpedicion');

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
        Schema::dropIfExists('licencias');
    }
}
