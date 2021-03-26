<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->string('nombreInstitucion');
            $table->string('direccionInstitucion');
            $table->enum('tipoSangre',['AB','A+','B+','B-','O+']);
            $table->string('nombreMedico');
            $table->string('fechaExamen');
            $table->string('restriccion');
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
        Schema::dropIfExists('examens');
    }
}
