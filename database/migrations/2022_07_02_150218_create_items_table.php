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
        Schema::create('tbl_items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name');
            $table->string('item_desc');
            $table->string('item_img_path');
            $table->string('item_ingredients');
            $table->string('item_price_string');
            $table->integer('item_price');
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
        Schema::dropIfExists('tbl_items');
    }
}
