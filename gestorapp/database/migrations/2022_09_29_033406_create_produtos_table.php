<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descricao');
            $table->string('setor');
            $table->string('fabricante');
            $table->string('fornecedor');
            $table->string('precoDeCusto');
            $table->string('precoDeVenda');
            $table->string('margemDeLucro');
            $table->string('estoqueMinimo');
            $table->string('estoqueAtual');
            $table->string('unidade');
            $table->date('ultimoReajuste');
            $table->string('observacoes');
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
        Schema::dropIfExists('produtos');
    }
};
