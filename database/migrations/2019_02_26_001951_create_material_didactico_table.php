<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialDidacticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MATERIAL_DIDACTICO', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('NOMBRE', 45);
            $table->string('TIPO', 45);
            $table->string('TAMAÑO', 45);
            $table->binary('RECURSO')->nullable();;
            $table->string('LINK', 90)->nullable();;
            $table->integer('ID_UNIDADES')->unsigned();

            $table->foreign('ID_UNIDADES')->references('id')->on('UNIDADES');
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
        Schema::dropIfExists('material_didactico');
    }
}
