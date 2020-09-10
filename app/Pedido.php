<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable= ["shopping_cart_id", 
                          "id_departamento", 
                          "id_municipio",
                          "direccion",
                          "cliente",
                          "correo",
                          "telefono",
                          "status",
                          "guia",
                          "total",
                          "fecha"];

    

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'id_departamento');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio', 'id_municipio');
    }

    public function scopeLatest($query)
    {
        return $query->orderID()->monthly();
    }

    public function scopeOrderID($query)
    {
        return $query->orderBy("id", "desc");
    }

    public function scopeMonthly($query)
    {
        return $query->where("created_at","=",date('m'));
    }

    
}

