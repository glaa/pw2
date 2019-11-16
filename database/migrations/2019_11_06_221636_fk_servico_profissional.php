<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkServicoProfissional extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servico_profissional', function (Blueprint $table){
            $table->foreign('servico_id')->references('id')->on('servicos');
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
        Schema::table('servico_profissional', function(Blueprint $table){
            $table->dropForeign(['servico_id', 'profissional_id']);
        });
    }
}
