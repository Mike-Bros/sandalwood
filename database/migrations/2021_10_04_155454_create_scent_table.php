<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scent', function (Blueprint $table) {
            $table->id('scent_id');
            $table->string('name');
            $table->string('company');
            $table->integer('amount_oz');
            $table->integer('price');
            $table->string('order_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scent');
    }
}
