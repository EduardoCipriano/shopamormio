@extends('principal')
 @section('contenido')
 <!-- Contenido Principal -->
 <main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Sistema Shop</a></li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
               <h2>Ventas</h2>
               <h2>Estadisticas</h2>                
            </div>
            <div class="card-body">
                <div class="col-xs-4 col-md-3 col-lg-2">
                    <span>Q. {{$totalMonth}}</span>
                    Monto de pedidos en el mes
                </div>
                <div class="col-xs-4 col-md-3 col-lg-2">
                    <span>Q. {{$totalMonthCount}}</span>
                    Total de pedidos en el mes
                </div>
               
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr class="bg-danger">
                           
                            <th>ID. pedido</th>
                            <th>Cliente</th>
                            <th>Dirección</th>
                            <th>No. guía</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Fecha de pedido</th>
                            <th>Método de pago</th>
                            <th>Acciones</th>
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
                                <td>Acciones</td>
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