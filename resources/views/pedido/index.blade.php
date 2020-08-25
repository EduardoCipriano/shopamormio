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
               <h2>Listado de productos</h2><br/>
                <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#agregarproducto">
                    <i class="fa fa-plus fa-1x"></i>&nbsp;&nbsp;Agregar Producto
                </button>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        {{$buscar=''}}
                        {{ Form::open(array('url'=>'producto', 'method'=>'GET','autocomplete'=>'off','role'=>'search'))}}
                        <div class="input-group">
                            <input type="search" class="form-control" name="buscar" placeholder="Buscar" value="{{$buscar}}">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr class="bg-primary">
                           
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th>Descripcion</th>
                            <th>Imagen</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Cambiar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $p)
                        <tr>
                            
                            <td>{{ $p->codigo }}</td>
                            <td>{{ $p->nombre }}</td>
                            <td>{{ $p->categoria }}</td>
                            <td>Q.{{ $p->precio }}</td>
                            <td>{{ $p->descripcion }}</td>
                            
                            
                            
                            <td>
                                <button  class="modal-container" type="button" data-toggle="modal" data-id="{{$p->id}}" data-extension="{{$p->extension}}" data-target="#verimagen">
                                    <img src="{{asset('storage/img/'.$p->id.'.'.$p->extension)}}"  alt="{{$p->nombre}}" class="img-responsive" width="35px" height="35px">
                                </button> 
                            </td>

                            
                            <td> 
                                    @if($p->condicion=="1")
                                        <button type="button" class="btn btn-success btn-sm">
                                    
                                          <i class="fa fa-check fa-1x"></i> 
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-danger btn-sm">
                                            
                                            <i class="fa fa-check fa-1x"></i> 
                                        </button>
                                    @endif
                                       
                            </td>
                            
                            <td>
                                <button type="button" class="btn btn-info btn-md" data-id_producto="{{$p->id}}" data-codigo="{{$p->codigo}}" data-id_categoria="{{$p->id_categoria}}" data-nombre="{{$p->nombre}}" data-descripcion="{{$p->descripcion}}" data-precio="{{$p->precio}}" data-toggle="modal" data-target="#editarProducto">

                                  <i class="fa fa-edit fa-1x"></i> Editar
                                </button> &nbsp;
                            </td>
                            <td>
                            @if($p->condicion)
                                <button type="button" class="btn btn-danger btn-sm" data-id_producto="{{$p->id}}" data-toggle="modal" data-target="#cambiarEstadoProducto">
                                    <i class="fa fa-times fa-1x"></i>
                                </button>
                             @else
                                <button type="button" class="btn btn-success btn-sm" data-id_producto="{{$p->id}}" data-toggle="modal" data-target="#cambiarEstadoProducto">
                                    <i class="fa fa-lock fa-1x"></i> 
                                </button>
                            @endif
                            </td>
                        </tr>
                    @endforeach   
                    </tbody>
                </table>
                {{$productos->render()}}
            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
    </div>


   <!--Inicio del modal agregar/-->
   <div class="modal fade" id="agregarproducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('producto.store')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }} 
                    @include('producto.form')
                    
                </form>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

<!--Inicio del modal modificar/-->
<div class="modal fade" id="editarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('producto.update','test')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
                    {{method_field('patch')}}<!-- proteger en la modificacion de registro -->
                    {{ csrf_field() }} 
                    <input type="hidden" id="id_producto" name="id_producto" value="">
                    @include('producto.form')
                    
                </form>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

<!--Inicio del cambiar estado/-->
<div class="modal fade" id="cambiarEstadoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cambiar estado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('producto.destroy','test')}}" method="post"  class="form-horizontal">
                    {{method_field('delete')}}<!-- proteger en la modificacion de registro -->
                    {{ csrf_field() }} 
                    <input type="hidden" id="id_producto" name="id_producto" value="">
                    <!--Inicio del cambiar estado/-->
                    <p>Esta seguro de cambiar el estado</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </div>                                
                </form>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

<div class="modal fade" id="verimagen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Producto</h4>
                <button type="button" class="close" id="cerrar" data-dismiss="modal" aria-label="Cerrar">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        
            <div class="modal-body">
            
                <div id="imagen" class="container-center" width="100%" height="100%">
                    
                </div>

            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->


    
</main>
<!-- /Fin del contenido principal -->
 @endsection