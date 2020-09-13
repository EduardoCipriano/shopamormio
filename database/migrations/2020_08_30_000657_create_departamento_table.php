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
        DB::table('departamento')->insert(['nombre'=>'Alta Verapaz']);
        DB::table('departamento')->insert(['nombre'=>'Baja Verapaz']);
        DB::table('departamento')->insert(['nombre'=>'Chimaltenango']);
        DB::table('departamento')->insert(['nombre'=>'Chiquimula']);
        DB::table('departamento')->insert(['nombre'=>'El Progreso']);
        DB::table('departamento')->insert(['nombre'=>'Escuintla']);
        DB::table('departamento')->insert(['nombre'=>'Guatemala']);
        DB::table('departamento')->insert(['nombre'=>'Huehuetenango']);
        DB::table('departamento')->insert(['nombre'=>'Izabal']);
        DB::table('departamento')->insert(['nombre'=>'Jalapa']);
        DB::table('departamento')->insert(['nombre'=>'Jutiapa']);
        DB::table('departamento')->insert(['nombre'=>'Petén']);
        DB::table('departamento')->insert(['nombre'=>'Quetzaltenango']);
        DB::table('departamento')->insert(['nombre'=>'Quiché']);
        DB::table('departamento')->insert(['nombre'=>'Retalhuleu']);
        DB::table('departamento')->insert(['nombre'=>'Sacatepéquez']);
        DB::table('departamento')->insert(['nombre'=>'San Marcos']);
        DB::table('departamento')->insert(['nombre'=>'Santa Rosa']);
        DB::table('departamento')->insert(['nombre'=>'Sololá']);
        DB::table('departamento')->insert(['nombre'=>'Suchitepéquez']);
        DB::table('departamento')->insert(['nombre'=>'Totonicapán']);
        DB::table('departamento')->insert(['nombre'=>'Zacapa']);
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
