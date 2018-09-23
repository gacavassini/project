<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeticoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('peticoes', function (Blueprint $table) {
            $table->increments('codPeticao')->unsigned();
            $table->text('fatos');
            //foreign keys
            $table->integer('codEntrevista')->unsigned();
            $table->foreign('codEntrevista')->references('codEntrevista')->on('entrevistas');
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
        Schema::dropIfExists('peticoes');
    }
}
