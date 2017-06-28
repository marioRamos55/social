<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('nombrePrograma');
            $table->string('horario');
        });

        Schema::create('programa_user', function (Blueprint $table) {
            $table->integer('programa_id')->unsigned();
            $table->foreign('programa_id')->references('id')->on('programas');

            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_user');
      

        Schema::dropIfExists('programas');
            
    }
}
