<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UNIDADES', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NOMBRE', 45);
            $table->integer('ID_MATERIA')->unsigned();
            $table->timestamps();

            $table->foreign('ID_MATERIA')->references('id')->on('MATERIA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidades');
    }
}
