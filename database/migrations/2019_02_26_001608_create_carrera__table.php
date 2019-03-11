<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CARRERA', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NOMBRE_CARRERA', 45);
            $table->binary('PLAN_ESTUDIOS')->nullable();
            $table->integer('CANTIDAD_SEMESTRE');
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
        Schema::dropIfExists('carrera_');
    }
}
