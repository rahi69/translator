<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->index();
            $table->bigInteger('type_id')->index();
            $table->bigInteger('language_id')->index();
            $table->bigInteger('normalmin')->nullable();
            $table->bigInteger('normalmax')->nullable();
            $table->bigInteger('goodmin')->nullable();
            $table->bigInteger('goodmax')->nullable();
            $table->bigInteger('excellentmin')->nullable();
            $table->bigInteger('excellentmax')->nullable();
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
        Schema::dropIfExists('prices');
    }
}
