<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candle', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->integer('wax_id');
            $table->integer('wax_amount');
            $table->integer('wick_id');
            $table->integer('fragrance_id');
            $table->integer('jar_id');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candle');
    }
}
