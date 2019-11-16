<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('nome');
            $table->integer('quantidade')->unsigned();
            $table->decimal('preco', 6, 2)->unsigned();
            $table->decimal('desconto', 4, 2)->unsigned();
            $table->text('descricao');

            $table->bigInteger('estabelecimento_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
