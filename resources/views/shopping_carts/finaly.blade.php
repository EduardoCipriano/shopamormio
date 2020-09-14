@extends('principalproducto')
@section('contenido')




<div class="container form-row text-center panel panel-footer ">
    @if(Session::has('message'))
				<div class="alert {{ Session::get('alert-class', 'alert-info') }} " role="alert">
					<strong>{{ Session::get('message') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			    @endif
    <h1  class="text-center" style="font-size: 75px;">Tu pedido fue: <span>{{$pedido->status}}</span></h1>
    <br>
    <div class="table-responsive-sm">
        <table class="table table table-striped ">
            <thead style="font-size: 15px; letter-spacing: 1px;text-transform: uppercase" >
                <tr>
                    <th scope="col" colspan="2" class="text-center">Información de tu pedido</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Cliente</th>
                    <td>{{$pedido->cliente}}</td>
                </tr>
                <tr>
                    <th scope="row">Correo</th>
                    <td>{{$pedido->correo}}</td>
                </tr>
                <tr>
                    <th scope="row">Telefono</th>
                    <td>{{$pedido->telefono}}</td>
                </tr>
                <tr>
                    <th scope="row">Direccion</th>
                    <td>{{$pedido->direccion}}, {{$pedido->municipio->nombre}}, {{$pedido->departamento->nombre}}</td>
                </tr>
                <tr>
                    <th class="text-center" scope="row" colspan="4">
                        <a href="{{('/compras/'.$shopping_cart->customid)}}" onclick="event.preventDefault(); document.getElementById('compras-form').submit();">Link permanente de tu compra</a> 
                        <form id="compras-form" action="{{url('/compras/'.$shopping_cart->customid)}}" method="GET" style="display: none;">
                        {{csrf_field()}}
                        </form>
                    </th>
                    
                </tr>
            </tbody>
        </table>
    </div>       
</div>




@endsection