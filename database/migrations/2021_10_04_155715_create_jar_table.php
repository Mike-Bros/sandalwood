<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jar', function (Blueprint $table) {
            $table->id('jar_id');
            $table->string('name');
            $table->string('size');
            $table->integer('quantity');
            $table->integer('price');
            $table->text('order_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jar');
    }
}
