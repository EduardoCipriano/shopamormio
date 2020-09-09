<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ["status"];

    public function approve(){
        $this->updateCustomIDAndStatus();
    }

    public function generateCustomID()
    {
        return md5("$this->id $this->updated_at");
    }

    public function updateCustomIDAndStatus(){
        $this->status = "aprobado";
        $this->customid= $this->generateCustomID();
        $this->save();
    }

    public function inShoppingCarts(){
        return $this->hasMany('App\InShoppingCart');
    }

    public function products(){
        return $this->belongsToMany('App\Producto', 'in_shopping_carts', 'shopping_cart_id','id_producto')
        ->withPivot('cantidad', 'precio');
    
    }

    public function productsSize(){
        return $this->products()->count();
    }

    public function pedido(){
        return $this->hasOne("App\Pedido")->first();
    }

    

    public static function findOrCreateBySessionID($shopping_cart_id){
        if ($shopping_cart_id)
            return ShoppingCart::findBySession($shopping_cart_id);
        else
            return ShoppingCart::createWithoutSession();
    }
    

    public static function findBySession ($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){
        return ShoppingCart::create([
            "status"=>"incompleted"
        ]);
    }
}