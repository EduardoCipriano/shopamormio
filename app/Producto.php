<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $fillable = ['codigo','id_categoria','nombre', 'descripcion', 'precio', 'condicion'];
}

