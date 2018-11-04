<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('atividades', function (Blueprint $table) {
            $table->increments('codAtividade');
            $table->integer('codCliente')->unsigned();
            $table->foreign('codCliente')->references('codCliente')->on('clientes');
            $table->bigInteger('numProcesso')->nullable();
            $table->string('atividade', 45)->nullable(); //tipo manifestacao
            $table->string('tipo', 45)->nullable();
            $table->integer('prazo')->nullable(); //prazo em dias
            $table->date('dataDiarioOficial'); //data do dia q foi cadastrado
            $table->integer('dias')->nullable(); //corrido ou util
            $table->date('dataLimite')->nullable(); //data final de prazo
            $table->string('atividadeStatus')->nullable();
            $table->text('observacao')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('atividades');
    }
}
