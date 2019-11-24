<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->date('data');
            $table->decimal('valor', 6,2)->unsigned();
            $table->integer('parcela')->unsigned();
            $table->enum('tipo',['A_VISTA', 'CREDITO', 'DEBITO']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('pagamentos')) {
            DB::statement('drop table pagamentos cascade'); 
        }
        //Schema::dropIfExists('pagamentos');
    }
}
