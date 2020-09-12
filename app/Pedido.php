<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Mail;
use App\Mail\PedidoCreated;
use App\Mail\PedidoUpdated;
use App\Mail\PedidoNuevo;
use App\Mail\PedidoEntregado;
use App\Mail\PedidoCancelado;

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
                          "metodo_pago",
                          "fecha"];

    

    public function namedepa()
    {
        return $this->departamento->nombre;
    }

    public function namemuni()
    {
        return $this->municipio->nombre;
    }

    public function sendUpdateMail()
    {
        Mail::to($this->correo)->send(new PedidoUpdated($this));
    }

    public function sendEntregadoMail()
    {
        Mail::to($this->correo)->send(new PedidoEntregado($this));
    }

    public function sendCanceladoMail()
    {
        Mail::to($this->correo)->send(new PedidoCancelado($this));
    }

    public function reMail(){
        Mail::to("anitatorrez1924@gmail.com")->send(new PedidoNuevo($this));
    }

    public function sendMail(){
        Mail::to($this->correo)->send(new PedidoCreated($this));
    }
    

    public function shopping_cart()
    {
        return Pedido::belongsTo('App\ShoppingCart');
    }
    
    public function shoppingCartID()
    {
        return $this->shopping_cart->customid;
    }

    public static function  totalMonth()
    {
        return Pedido::monthly()->sum("total");
    }

    public static function  totalMonthCount()
    {
        return Pedido::monthly()->count();
    }

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
        return $query->whereMonth("created_at","=",date('m'));
    }

    

    
}

