<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAgendamentoProfissional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agendamento_profissional', function (Blueprint $table){
            $table->foreign('agendamento_id')->references('id')->on('agendamentos');
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
        Schema::table('agendamento_profissional', function(Blueprint $table){
            $table->dropForeign(['agendamento_id', 'profissional_id']);
        });
    }
}
