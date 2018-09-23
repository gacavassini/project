<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticoesBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();

      Schema::create('peticoes_bases', function (Blueprint $table) {
          $table->increments('codPeticaoBase')->unsigned();
          //foreign keys
          $table->integer('codBase')->unsigned();
          $table->foreign('codBase')->references('codBase')->on('bases');
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
        Schema::dropIfExists('peticoes_bases');
    }
}
