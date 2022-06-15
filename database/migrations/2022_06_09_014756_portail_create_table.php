<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PortailCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('portail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home');
            $table->string('dasboard');
            $table->string('chat');
            $table->string('setor');
            $table->string('report');
            $table->string('request');
            $table->string('recredito');
            $table->string('transaction');
            $table->string('logs');

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
        //
    }
}
