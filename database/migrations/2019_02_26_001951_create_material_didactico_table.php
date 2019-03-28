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
        Schema::create('material_didactico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('tipo', 45);
            $table->string('tamaño', 45);
            $table->binary('recurso')->nullable();;
            $table->string('link', 90)->nullable();;
            $table->integer('id_unidades')->unsigned();

            $table->foreign('id_unidades')->references('id')->on('unidades');
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
