<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("shopping_cart_id")->unsigned();
            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts");
            $table->integer("id_departamento")->unsigned();
            $table->foreign("id_departamento")->references("id")->on("departamento");
            $table->integer("id_municipio")->unsigned();
            $table->foreign("id_municipio")->references("id")->on("municipio");
            $table->string("direccion");
            $table->string("cliente");
            $table->string("correo");
            $table->string("telefono");
            $table->string("status")->default("creado");
            $table->string("metodo_pago")->default("Contra entrega");
            $table->string("guia")->nullable();
            $table->decimal("total");
            $table->date('fecha');
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
        Schema::dropIfExists('pedidos');
    }
}
