<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->unsignedBigInteger('secondary_category_id');
            $table->unsignedBigInteger('item_condition_id');
            $table->unsignedBigInteger('item_size_id');

            $table->string('name');
            $table->string('image_file_name');
            $table->text('description');
            $table->string('brand');
            $table->string('color');
            $table->unsignedInteger('price');
            $table->string('state');
            $table->timestamp('bought_at')->nullable();

            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreign('secondary_category_id')->references('id')->on('secondary_categories');
            $table->foreign('item_condition_id')->references('id')->on('item_conditions');
            $table->foreign('item_size_id')->references('id')->on('item_sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
