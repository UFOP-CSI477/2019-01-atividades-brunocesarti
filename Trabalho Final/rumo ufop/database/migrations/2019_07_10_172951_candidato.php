<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Candidato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome',60);
            $table->string('cel',13);
            $table->string('cpf',11);
            $table->string('rg',10);
            $table->string('rua',60);
            $table->string('bairro',60);
            $table->string('cidade',60);
            $table->string('estado',60);
            $table->string('datanascimento',60);
            $table->string('escolafund',60);
            $table->string('escolamed',60);
            $table->unsignedInteger('ps_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('ps_id')->references('id')->on('processoseletivo');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::dropIfExists('candidato');
    }
}
