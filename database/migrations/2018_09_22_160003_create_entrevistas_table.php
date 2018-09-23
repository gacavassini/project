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
            $table->text('descResposta');
            //foreign keys
            $table->integer('cliCpf')->unsigned();
            $table->integer('empresaCnpj')->unsigned();
            $table->timestamps();
        });

        Schema::table('entrevistas', function($table){
          //adiciona a referencia
          $table->foreign('cliCpf')->references('cpf')->on('clientes');
          $table->foreign('empresaCnpj')->references('cnpj')->on('empresas');
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
