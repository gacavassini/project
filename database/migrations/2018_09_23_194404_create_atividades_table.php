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
            $table->string('atividade', 45)->nullable();
            $table->string('tipo', 45)->nullable();
            $table->integer('qtdDia')->nullable();
            $table->integer('prazo')->nullable();
            $table->integer('dias')->nullable();
            $table->date('dataLimite')->nullable();
            $table->string('atividadeStatus')->nullable();
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
