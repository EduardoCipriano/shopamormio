@extends('principal')
 @section('contenido')
 <!-- Contenido Principal -->
 <main class="container-fluid main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Sistema de Pedidos AmormioShop</a></li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
               <h2>Estadisticas</h2>                
            </div>
            <div class="card-body row top-space">
                <div class="col-xs-4 col-md-3 col-lg-6 sale-data" style="padding: 1em; text-align: center; border-right: solid 5px #690b0b;">
                    <span style=" display: block; font-size: 2.6em; color: #690b0b;">Q. {{$totalMonth}}</span>
                    Monto de pedidos en el mes
                </div>
                <div class="col-xs-4 col-md-3 col-lg-6 sale-data "  style="padding: 1em; text-align: center; ">
                    <span style=" display: block; font-size: 2.6em; color: #690b0b;">{{$totalMonthCount}}</span>
                    Total de pedidos en el mes
                    
                </div>
               <div style="padding: 1em;"></div>
                <table class="table table-hover table-sm table-responsive">
                    <thead class="bg-dark text-white" >
                        <tr >
                           
                            <th>ID. pedido</th>
                            <th>Cliente</th>
                            <th>Dirección</th>
                            <th>No. guía</th>
                            <th>Estado</th>
                            <th>Total</th>
                            <th>Fecha</th>
                            <th>Pago</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->cliente}}</td>
                                <td>{{$p->direccion}}, {{$p->municipio->nombre}}, {{$p->departamento->nombre}}</td>
                                <td>
                                    <a href="#" 
                                    data-type="text"
                                    data-pk="{{$p->id}}"
                                    data-url="{{url("/pedido/$p->id")}}"
                                    data-title="Número de guía" 
                                    data-value="{{$p->guia}}"
                                    class="set-guia"
                                    data-name="guia"></a>
                                </td>
                                <td>
                                    <a href="#" 
                                    data-type="select"
                                    data-pk="{{$p->id}}"
                                    data-url="{{url("/pedido/$p->id")}}"
                                    data-title="Número de guía" 
                                    data-value="{{$p->status}}"
                                    class="select-status"
                                    data-name="status"></a>
                                </td>
                                <td>{{$p->total}}</td>
                                <td>{{$p->fecha}}</td>
                                <td>{{$p->metodo_pago}}</td>
                               
                            </tr>   
                    @endforeach   
                    </tbody>
                </table>
                {{$pedidos->render()}}
            </div>
        </div>
    </div>
</main>

<!-- /Fin del contenido principal -->
 @endsection