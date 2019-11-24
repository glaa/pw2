<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAtendimentoProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendimento_produto', function (Blueprint $table){
            $table->foreign('atendimento_id')->references('id')->on('atendimentos');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atendimento_produto', function(Blueprint $table){
            $table->dropForeign(['atendimento_id'], ['produto_id']);
        });
    }
}
