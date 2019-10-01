<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoProfissionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico_profissionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->foreign("profissional_id")->references("id")->on("profissionals");
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
        Schema::dropIfExists('servico_profissionals');
    }
}
