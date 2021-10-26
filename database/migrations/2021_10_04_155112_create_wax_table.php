<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wax', function (Blueprint $table) {
            $table->id('wax_id');
            $table->string('name');
            $table->string('type');
            $table->integer('weight');
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
        Schema::dropIfExists('wax');
    }
}
