<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUFSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('u_f_s', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_uf')->nullable();;
            $table->string('sigla')->nullable();;
            $table->string('nome')->nullable();;
            $table->string('status')->nullable();;
            $table->timestamps();
            // $table->id('codigo_uf');
            // $table->string('sigla')->nullable();;
            // $table->string('nome')->nullable();;
            // $table->string('status')->nullable();;
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('u_f_s');
    }
}
