<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDoubleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_double', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('credito_id');
            $table->integer('durasaun_id');
            $table->integer('osanfunan_id');
            $table->string('t_imprestimo');
            $table->date('date');
            $table->integer('aprovado');
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
        Schema::dropIfExists('tb_double');
    }
}
