<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InShoppingCart extends Model
{
    protected $fillable= ["id_producto", "shopping_cart_id", "precio", "cantidad"];
}
