<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penalidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pen_nome')->nullable();
            $table->integer('pen_grau')->nullable();
            $table->string('pen_dt_inicio')->nullable();
            $table->string('pen_dt_fim')->nullable();
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
        Schema::dropIfExists('penalidades');
    }
}
