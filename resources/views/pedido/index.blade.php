@extends('principal')
 @section('contenido')
 <!-- Contenido Principal -->
 <main class="main">
    <script>
        if(performance.navigation.type == 2){
            location.reload(true);
         }
        </script>
        <script type="text/javascript">
            function actualizar(){location.reload(true);}
          //Función para actualizar cada 4 segundos(4000 milisegundos)
            setInterval("actualizar()",600000);
          </script>
    <!-- Breadcrumb -->
    <ol class="breadcrumb bg-danger">
        <li class="breadcrumb-item active"  ><a style="color: black;" href="/"> <h5>Sistema de Pedidos AmormioShop</h5> </a></li>
    </ol>
    <div class="container-fluid">
        @if(Session::has('message'))
				<div class="alert {{ Session::get('alert-class', 'alert-info') }} " role="alert">
					<strong>{{ Session::get('message') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			    @endif
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
               <h2>Estadísticas</h2>                
            </div>
            <div class="card-body row top-space">
                <div class="col-xs-4 col-md-3 col-lg-6 sale-data" style="height: 80px; padding: 1em; text-align: center; border-right: solid 5px black;">
                    <span style=" display: block; font-size: 2em; color: red;">Q. {{$totalMonth}}</span>
                    <p class="lead">Monto de pedidos en el mes</p>
                </div>
                <div class="col-xs-4 col-md-3 col-lg-6 sale-data "  style="padding: 1em; text-align: center; ">
                    <span style=" display: block; font-size: 2em; color: red;">{{$totalMonthCount}}</span>
                    <p class="lead">Total de pedidos en el mes </p>
                    
                </div>
                <table class="table table-hover table-sm table-responsive">
                    <thead class="bg-dark text-white" >
                        <tr class="text-center">
                           
                            <th class="text-center">ID.</th>
                            <th class="text-center">Cliente</th>
                            <th class="text-center">Dirección</th>
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
                                @if ($p->status=='entregado' || $p->status=='cancelado')
                                    <td>
                                        {{$p->status}}
                                    </td>                                    
                                @else
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
                                    
                                @endif                                
                                <td>Q. {{$p->total}}</td>
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