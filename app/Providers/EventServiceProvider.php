<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Pedido;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

       /* Pedido::created(function($pedido){
            $pedido->sendMail();
        });*/

        Pedido::updated(function($pedido){
            if($pedido->status=='enviado' && $pedido->guia!=null)
            {
                $pedido->sendUpdateMail();
            }            
        });

        Pedido::updated(function($pedido){
            if($pedido->status=='cancelado')
            {
                $pedido->sendCanceladoMail();
            }            
        });

        Pedido::updated(function($pedido){
            if($pedido->status=='entregado')
            {
                $pedido->sendEntregadoMail();
            }            
        });

        Pedido::created(function($pedido){
            
            $pedido->reMail();
                       
        });
    }
}
