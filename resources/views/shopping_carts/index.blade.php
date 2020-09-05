@extends('principalproducto')
@section('contenido')
<br>
<br>
<div class="container">
    <h1  class="text-center" style="font-size: 75px;">Tu pedido</h1>

    <div class="bs-docs-example">
        <table class="table table-bordered">
            <thead style="font-size: 15px;
            letter-spacing: 1px;text-transform: uppercase;color: #fff;border: none;padding: 10px 17px;background: #000;" >
                <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Precio</th>
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
                    <td>Q. {{$p->precio}}</td>
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
                    <td colspan="2">Total</td>
                    <td style="color:red; font-size: 15px; ">Q. {{$total}}</td>
                </tr>
            </tbody>
        </table>
        <div class="form-row text-center">
            <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmarpedido" style="    font-size: 11px;
            letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:red ;">Realizar pedido</button>
        </div>                                
    </div>
    
   <!--Inicio del modal agregar/-->
   <div class="modal fade" id="confirmarpedido" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Datos de tu pedido</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('categoria.store')}}" method="post"  class="form-horizontal">
                {{ csrf_field() }} 
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