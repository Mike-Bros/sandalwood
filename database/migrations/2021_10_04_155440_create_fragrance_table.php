<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFragranceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fragrance', function (Blueprint $table) {
            $table->id();
            $table->integer('scent_id_1')->references('id')->on('scent');
            $table->decimal('amount_1', 8,4);
            $table->integer('scent_id_2')->references('id')->on('scent')->nullable()->default(null);
            $table->decimal('amount_2', 8,4)->nullable()->default(null);
            $table->integer('scent_id_3')->references('id')->on('scent')->nullable()->default(null);
            $table->decimal('amount_3', 8,4)->nullable()->default(null);
            $table->integer('scent_id_4')->references('id')->on('scent')->nullable()->default(null);
            $table->decimal('amount_4', 8,4)->nullable()->default(null);
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
        Schema::dropIfExists('combination');
    }
}
