<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('category_id');
            $table->string('title');
            $table->string('name');
            $table->timestamp('product_time');
            $table->string('thumb');
            $table->text('desc');
            $table->boolean('is_top')->default(false);
            $table->tinyInteger('sort_order')->default('99');
            $table->text('content');
            $table->string('product_manual');
            $table->string('install_manual');
            $table->string('product_html');
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
        //
    }
}
