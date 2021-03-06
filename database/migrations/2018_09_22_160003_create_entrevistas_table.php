<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('entrevistas', function (Blueprint $table) {
            $table->increments('codEntrevista')->unsigned();
            //foreign keys
            $table->integer('codCliente')->unsigned();
            $table->integer('codEmpresa')->unsigned();
            $table->timestamps();
        });

        Schema::table('entrevistas', function($table){
          //adiciona a referencia
          $table->foreign('codCliente')->references('codCliente')->on('clientes');
          $table->foreign('codEmpresa')->references('codEmpresa')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrevistas');
    }
}
