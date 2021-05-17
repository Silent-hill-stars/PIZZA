<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShopProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->index();
            $table->string('slug');
            $table->string('name');
            $table->timestamps();

            $table->foreign('category_id', 'products_category_id_fk')
                ->on('shop_categories')
                ->references('id')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('options_category_id', 'products_options_category_id')
                ->on('shop_categories_options')
                ->references('id')
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_products');
    }
}
