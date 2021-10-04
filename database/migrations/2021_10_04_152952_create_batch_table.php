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
            $table->id('batch_id');
            $table->integer('candles_made');
            $table->integer('test_id')->nullable();
            $table->integer('process_id')->nullable();
            $table->integer('candle_id');
            $table->string('batch_img')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamp('create_date');
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
