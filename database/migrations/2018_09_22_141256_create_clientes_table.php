<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('cpf')->unique()->unsigned();
            $table->primary('cpf');
            $table->string('nome', 100);
            $table->string('rua', 100);
            $table->integer('numEndereco');
            $table->string('bairro', 50);
            $table->string('cep', 9);
            $table->string('cidade', 50);
            $table->string('complemento')->nullable();
            $table->string('rg', 11);
            $table->string('profissao', 50);
            $table->string('email', 70)->nullable();
            $table->string('telefoneRes', 15);
            $table->string('telefoneContato', 15)->nullable();
            $table->string('celular', 15);
            $table->string('estadoCivil', 30);
            $table->string('cliStatus', 30);
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
        Schema::dropIfExists('clientes');
    }
}
