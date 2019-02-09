<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAndamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('andamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('and_descricao')->nullable();
            $table->string('and_dt_registro')->nullable();
            
            $table->integer('fiscalizacao_id')->unsigned()->nullable();
            $table->integer('penalidade_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();
            $table->integer('termoajusteconduta_id')->unsigned()->nullable();

            $table->foreign('fiscalizacao_id')->references('id')->on('fiscalizacaos')->onDelete('cascade');
            $table->foreign('penalidade_id')->references('id')->on('penalidades')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuss')->onDelete('cascade');
            $table->foreign('termoajusteconduta_id')->references('id')->on('termoajustecondutas')->onDelete('cascade');
            $table->timestamps();
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('andamentos');
    }
}
