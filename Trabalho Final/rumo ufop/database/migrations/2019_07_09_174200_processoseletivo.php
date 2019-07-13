<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Processoseletivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processoseletivo', function(Blueprint $table) {
            $table->increments('id');
            $table->enum('semestre', ['1', '2']);
            $table->enum('status', ['Aberto', 'Fechado']);
            $table->string('hora',10);
            $table->string('local',60);
            $table->date('dataprova');
            $table->date('inicioinscricao');
            $table->date('fimiscricao');
            $table->date('iniciomatricula');
            $table->date('fimmatricula');
            $table->date('matriculaexc');
            $table->unsignedInteger('user_id');
            $table->timestamps();
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
        Schema::dropIfExists('processoseletivo');
    }
}
