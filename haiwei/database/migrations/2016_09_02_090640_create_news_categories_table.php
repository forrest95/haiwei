<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default('0');
            $table->string('name');
            $table->string('thumb');
            /*$table->tinyInteger('type');
            $table->string('url');*/
            $table->tinyInteger('sort_order')->default('99');
            $table->boolean('is_show')->default(true);
//            $table->text('content');
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
