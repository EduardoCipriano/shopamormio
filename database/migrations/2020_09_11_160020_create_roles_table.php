<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\DB;


class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 40)->unique();
            $table->string('descripcion', 100)->nullable();
            $table->boolean('condicion')->default(1);
            $table->timestamps();
        });

        DB::table('roles')->insert(
            ['id'=>1,'nombre'=>'root','descripcion'=>'administrador de software']
        );
        DB::table('roles')->insert(['id'=>2,'nombre'=>'admin','descripcion'=>'administrador del sistema']);
        DB::table('roles')->insert(['id'=>3,'nombre'=>'vendedor','descripcion'=>'administrador de pedidos']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}