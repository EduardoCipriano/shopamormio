@extends('principalproducto')
@section('contenido')

<br>
<br>
<br>
<br>
<div class="container ">
  <script>
if(performance.navigation.type == 2){
    location.reload(true);
 }
</script>
@if(Session::has('message'))
				<div class="alert {{ Session::get('alert-class', 'alert-info') }} " role="alert">
					<strong>{{ Session::get('message') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			    @endif
    @if( $productsCount>0)
    <h1  class="text-center" style="font-size: 75px;">Tu pedido</h1>

    <div class="bs-docs-example col-md-12 panel panel-footer" id="contenido">
        <table class="table table table-striped  ">
            <thead style="font-size: 15px;
            letter-spacing: 1px;text-transform: uppercase" >
                <tr class="bg-danger">
                    <th>#</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0 ?>
                @foreach ($productos as $p)
                <?php $i++ ?>
                <tr>
                    <td>{{ $i}}</td>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->pivot->cantidad}}</td>
                    <td>Q. {{bcdiv($p->pivot->precio, '1', 2)}}</td>
                    <td>Q. {{bcdiv($p->pivot->precio*$p->pivot->cantidad, '1', 2)}}</td>
                    <td>
                        <form method="POST" action="{{ url("eliminar/{$p->id}") }}">
                            @csrf
                            @method('DELETE')
                       
                            <button  class="btn btn-danger" type="submit">X</button>
                          </form>
                        
                    </td>
                </tr>   
                @endforeach
                <tr>
                    <td colspan="4">Total</td>
                    <td style="color:red; font-size: 15px; ">Q. {{bcdiv($total, '1', 2)}}</td>
                </tr>
            </tbody>
        </table>
        <div class="container text-center">    
            <div class="row">
                <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarpedido" style="    font-size: 11px;
                letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:red ;">Realizar pedido</button>
            
                
                 
                 <a class="nav-link" type="button" style="font-size: 11px;
                 letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:crimson ;" href="{{url('/buynow')}}" onclick="event.preventDefault(); document.getElementById('buynow-form').submit();">ver más productos</a> 
					<form id="buynow-form" action="{{url('/buynow')}}" method="GET" style="display: none;">
					{{csrf_field()}}
					</form>
                
            </div> 
        </div>
    </div>
    @else
       
        <div class="container form-row text-center panel panel-footer ">
            <h1  class="text-center" style="font-size: 75px;">No tienes productos agregados</h1>
            <br>
            <a class="nav-link" type="button" style="font-size: 11px;
                 letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:crimson ;" href="{{url('/buynow')}}" onclick="event.preventDefault(); document.getElementById('buynow-form').submit();">Empieza tu compra</a> 
					<form id="buynow-form" action="{{url('/buynow')}}" method="GET" style="display: none;">
					{{csrf_field()}}
					</form>
        </div>
    @endif
   <!--Inicio del modal agregar/-->
   <div class="modal fade" id="confirmarpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Datos de tu pedido</h4>
            </div>
           
            <div class="modal-body">
                <form action="{{route('pedido.store')}}" method="post"  class="form-horizontal">
                {{ csrf_field() }}
                <input hidden id="total" name="total" value="{{$total}}" /> 
                
                    @include('shopping_carts.form')
                    
                </form>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

</div>
@endsection