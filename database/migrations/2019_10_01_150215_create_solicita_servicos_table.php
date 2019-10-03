<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitaServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicita_servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger("agendamento_id")->unsigned();
            $table->bigInteger("servico_id")->unsigned();
            //$table->foreign("agendamento_id")->references("id")->on("agendamentos");
            $table->foreign("servico_id")->references("id")->on("servicos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicita_servicos');
    }
}
