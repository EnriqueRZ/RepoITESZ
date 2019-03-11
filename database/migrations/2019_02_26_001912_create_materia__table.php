<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MATERIA', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NOMBRE', 45);
            $table->integer('ID_CARRERA')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('materia_');
    }
}
