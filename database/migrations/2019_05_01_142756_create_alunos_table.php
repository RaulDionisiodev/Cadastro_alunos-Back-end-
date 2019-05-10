<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nome')->unique();
            $table->date('nascimento');
            $table->integer('serie');
            $table->string('cep');
            $table->string('rua');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('nome_mae');
            $table->date('data_mensalidade');
            $table->string('cpf_mae');
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
        Schema::dropIfExists('alunos');
    }
}
