<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id')->unsigned();
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->double('energy_kj');
            $table->double('energy_kcal');
            $table->double('fat');
            $table->double('saturated_fatty_acids');
            $table->double('carbs');
            $table->double('fiber');
            $table->double('protein');
            $table->double('salt');
            $table->string('image')->default('pictures/No_images_available.png');
            $table->morphs('typable');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
