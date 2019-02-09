<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermoajustecondutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termoajustecondutas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('tac_nup');
            $table->string('tac_dt_solicitacao_email')->nullable();
            $table->string('tac_dt_assinatura')->nullable();
            $table->string('tac_dt_publ_dou')->nullable();
            $table->string('tac_dt_inicio_vigencia')->nullable();
            $table->string('tac_dt_fim_vigencia')->nullable();
            $table->string('tac_extrato')->nullable();
            $table->string('tac_dou')->nullable();
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
        Schema::dropIfExists('termoajustecondutas');
    }
}
