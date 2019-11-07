<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkProfissionalAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profissional_agendamento', function (Blueprint $table){
            $table->foreign('profissional_id')->references('id')->on('profissionals');
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
        Schema::table('profissional_agendamento', function(Blueprint $table){
            $table->dropForeign(['profissional_id', 'agendamento_id']);
        });
    }
}
