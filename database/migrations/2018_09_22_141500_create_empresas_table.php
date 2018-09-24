<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('codEmpresa')->unsigned();
            $table->string('cnpj', 16)->unique();
            $table->string('nome', 100);
            $table->string('rua', 100);
            $table->integer('numEndereco');
            $table->string('bairro', 50);
            $table->string('cep', 9);
            $table->string('cidade', 50);
            $table->string('complemento')->nullable();
            $table->string('telefone', 15);
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
        Schema::dropIfExists('empresas');
    }
}
