<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->boolean('condicion')->default(1);
        });
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Baja Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Chimaltenango'=>'admin']);
        DB::table('departamento')->insert(['Chiquimula'=>'admin']);
        DB::table('departamento')->insert(['El Progreso'=>'admin']);
        DB::table('departamento')->insert(['Escuintla'=>'admin']);
        DB::table('departamento')->insert(['Guatemala'=>'admin']);
        DB::table('departamento')->insert(['Huehuetenango'=>'admin']);
        DB::table('departamento')->insert(['Izabal'=>'admin']);
        DB::table('departamento')->insert(['Jalapa'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
        DB::table('departamento')->insert(['Alta Verapaz'=>'admin']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamento');
    }
}
