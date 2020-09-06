<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_shopping_carts', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("cantidad")->default(1);
            $table->decimal('precio', 9,2);
            $table->integer("id_producto")->unsigned();
            $table->integer("shopping_cart_id")->unsigned();

            $table->foreign("id_producto")->references("id")->on("producto");
            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts");


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
        Schema::dropIfExists('in_shopping_carts');
    }
}
