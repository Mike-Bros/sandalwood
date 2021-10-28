<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch', function (Blueprint $table) {
            $table->id();
            $table->integer('candles_made');
            $table->integer('test_id')->references('id')->on('wick')->nullable();
            $table->integer('process_id')->references('id')->on('wick')->nullable();
            $table->integer('candle_id')->references('id')->on('candle');
            $table->text('batch_img')->nullable();
            $table->longText('notes')->nullable();
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
        Schema::dropIfExists('batch');
    }
}
