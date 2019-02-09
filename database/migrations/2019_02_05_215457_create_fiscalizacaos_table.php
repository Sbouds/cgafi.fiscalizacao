<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiscalizacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiscalizacaos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('fisc_dt_inicio')->nullable();
            $table->string('fisc_dt_prorrogacao')->nullable();
            $table->string('fisc_nup')->nullable();

            $table->integer('entidade_id')->unsigned()->nullable();
            $table->integer('fiscalresponsavel_id')->unsigned()->nullable();
            $table->integer('origem_id')->unsigned()->nullable();

            $table->foreign('entidade_id')->references('id')->on('entidades')->onDelete('cascade');
            $table->foreign('fiscalresponsavel_id')->references('id')->on('fiscalresponsavels')->onDelete('cascade');
            $table->foreign('origem_id')->references('id')->on('origems')->onDelete('cascade');
            
            

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
        Schema::dropIfExists('fiscalizacaos');
    }
}
