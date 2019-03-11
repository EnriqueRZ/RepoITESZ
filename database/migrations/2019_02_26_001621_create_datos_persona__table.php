<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DATOS_PERSONA', function (Blueprint $table) {
            $table->increments('ID_DATOS_PERSONA');
            $table->string('NOMBRE', 45);
            $table->string('A_PATERNO', 45);
            $table->string('A_MATERNO', 45);
            $table->string('CORREO', 45);
            $table->integer('ID_TIPO_USUARIO')->unsigned();
            $table->integer('ID_CARRERA')->unsigned();
            $table->timestamps();
            
            $table->foreign('ID_TIPO_USUARIO')->references('id')->on('TIPO_USUARIO');
            $table->foreign('ID_CARRERA')->references('id')->on('CARRERA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_persona_');
    }
}
