<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('nombre');
            $table->integer('id')->unique(); //NO CONTROL
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('id_tipo_usuario')->unsigned();
            $table->integer('id_carrera')->unsigned();
            
            $table->rememberToken();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipo_usuario');
            $table->foreign('id_carrera')->references('id')->on('carrera');
        });
        /**
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
