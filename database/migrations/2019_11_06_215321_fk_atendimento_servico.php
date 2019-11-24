<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAtendimentoServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendimento_servico', function (Blueprint $table){
            $table->foreign('atendimento_id')->references('id')->on('atendimentos');
            $table->foreign('servico_id')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atendimento_servico', function(Blueprint $table){
            $table->dropForeign(['atendimento_id'], ['servico_id']);
        });
    }
}
