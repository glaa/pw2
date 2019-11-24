<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAtendimentoProfissional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendimento_profissional', function (Blueprint $table){
            $table->foreign('atendimento_id')->references('id')->on('atendimentos');
            $table->foreign('profissional_id')->references('id')->on('profissionals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atendimento_profissional', function(Blueprint $table){
            $table->dropForeign(['atendimento_id'], ['profissional_id']);
        });
    }
}
