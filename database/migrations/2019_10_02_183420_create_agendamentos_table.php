<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('data');
            $table->string('hora');
            $table->bigInteger('cliente_id')->unsingned;
            $table->bigInteger('agenda_id')->unsingned;
            $table->foreign("cliente_id")->references("id")->on("clientes");
            $table->foreign("agenda_id")->references("id")->on("agendas");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
