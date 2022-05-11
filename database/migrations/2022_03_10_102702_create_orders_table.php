<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('discount_id')->unsigned();
            $table->foreign('discount_id')->references('id')->on('discounts');
            $table->dateTime('purchase_date');
            $table->dateTime('delivery_date');
            $table->boolean('in_progress')->default(false);
            $table->boolean('is_delivery')->default(false);
            $table->text('delivery_address');
            $table->boolean('canceled')->default(false);
            $table->integer('note');
            $table->text('commentary');
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
        Schema::dropIfExists('orders');
    }
}
