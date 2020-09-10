<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $fillable = ['nombre','condicion'];

    public function municipios()
    {
        return $this->hasMany('App\Municipio', 'id_departamento');
    }

}
