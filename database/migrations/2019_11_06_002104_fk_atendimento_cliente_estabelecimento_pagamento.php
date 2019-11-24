<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkAtendimentoClienteEstabelecimentoPagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atendimentos', function (Blueprint $table){
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('estabelecimento_id')->references('id')->on('estabelecimentos');
            $table->foreign('pagamento_id')->references('id')->on('pagamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atendimentos', function(Blueprint $table){
            $table->dropForeign(['cliente_id'], ['estabelecimento_id'], ['pagamento_id']);
        });
    }
}
