<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('car_model_id');
            $table->text('description');
            $table->unsignedSmallInteger('year');
            $table->unsignedInteger('price_usd');
            $table->string('image', 180);
            $table->unsignedTinyInteger('status');
            $table->unsignedTinyInteger('rating');
            $table->timestamps();

            // Restringir columnas brand_id y car_model_id
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');
            $table->foreign('car_model_id')
                ->references('id')
                ->on('car_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
