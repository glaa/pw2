<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAgendamentoServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agendamento_servico', function (Blueprint $table){
            $table->foreign('agendamento_id')->references('id')->on('agendamentos');
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
        Schema::table('agendamento_servico', function(Blueprint $table){
            $table->dropForeign(['agendamento_id'],['servico_id']);
        });
    }
}
