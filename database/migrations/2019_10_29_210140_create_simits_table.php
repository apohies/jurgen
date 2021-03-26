<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->string('codigoInfraccion');
            $table->string('descripcionCodigo');
            $table->string('fechaInfraccion');
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
        Schema::dropIfExists('simits');
    }
}
