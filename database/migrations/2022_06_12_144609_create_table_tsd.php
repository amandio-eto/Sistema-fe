<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTsd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tsd', function (Blueprint $table) {
            $table->string('title');
            $table->string('nu');
            $table->string('durasaun');
            $table->string('data');
            $table->string('utilizador');
            $table->string('tempo');
            $table->string('aksaun');
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
        Schema::dropIfExists('table_tsd');
    }
}
