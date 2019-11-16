<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkServicoAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servico_agendamento', function (Blueprint $table){
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->foreign('agendamento_id')->references('id')->on('agendamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servico_agendamento', function(Blueprint $table){
            $table->dropForeign(['servico_id', 'agendamento_id']);
        });
    }
}
