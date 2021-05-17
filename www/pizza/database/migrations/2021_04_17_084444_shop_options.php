<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ShopOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_options', function (Blueprint $table) {
            $table->unsignedInteger('category_option_id')->index();
            $table->unsignedInteger('product_id')->index();
            $table->timestamps();

            $table->foreign('category_option_id', 'options_category_option_id')
                ->on('shop_categories_options')
                ->references('id')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('product_id', 'options_product_id')
                ->on('shop_products')
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
        Schema::dropIfExists('shop_options');
    }
}
