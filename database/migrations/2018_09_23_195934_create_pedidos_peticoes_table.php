<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosPeticoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('pedidos_peticoes', function (Blueprint $table) {
            $table->increments('codPedidoPeticao')->unsigned();
            //foreign keys
            $table->integer('codPedido')->unsigned();
            $table->foreign('codPedido')->references('codPedido')->on('pedidos');
            $table->integer('codPeticao')->unsigned();
            $table->foreign('codPeticao')->references('codPeticao')->on('peticoes');
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
        Schema::dropIfExists('pedidos_peticoes');
    }
}
