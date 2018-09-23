<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrevistaQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('entrevista_questoes', function (Blueprint $table) {
            $table->increments('id');
            //foreign keys
            $table->integer('eq_codEntrevista')->unsigned();
            $table->integer('eq_codQuestao')->unsigned();
            $table->foreign('eq_codEntrevista')->references('codEntrevista')->on('entrevistas');
            $table->foreign('eq_codQuestao')->references('codQuestao')->on('questoes');
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
        Schema::dropIfExists('entrevista_questoes');
    }
}
