<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $fillable = ['nombre','condicion','id_departamento'];

     public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'id_departamento');
    }
}
