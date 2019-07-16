<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('id'); 
            $table->date('fechaaprobacion');
            $table->integer('cc_alumnos')->unsigned();
            $table->integer('id_usuarios')->unsigned();
            $table->integer('id_cursos')->unsigned();
            $table->timestamps();
            $table->foreign('id_usuarios')->references('id')->on('Usuarios');
            $table->foreign('id_cursos')->references('id')->on('Cursos');
            $table->foreign('cc_alumnos')->references('cc')->on('Alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
