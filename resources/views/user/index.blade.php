@extends('principal')
 @section('contenido')
 <!-- Contenido Principal -->
 <main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Sistema de Pedidos AmormioShop</a></li>
    </ol>
    <script>
        if(performance.navigation.type == 2){
            location.reload(true);
         }
        </script>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
               <h2>Listado de Usuarios</h2><br/>
                <button class="btn btn-danger btn-lg" type="button" data-toggle="modal" data-target="#AgregarUsuario">
                    <i class="fa fa-plus fa-1x"></i>&nbsp;&nbsp;Agregar Usuario
                </button>
            </div>
            <div class="card-body">
                @if(Session::has('message'))
				<div class="alert {{ Session::get('alert-class', 'alert-info') }} " role="alert">
					<strong>{{ Session::get('message') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			    @endif
                <div class="form-group row">
                    <div class="col-md-6">
                        {{$buscar=''}}
                        {{ Form::open(array('url'=>'user', 'method'=>'GET','autocomplete'=>'off','role'=>'search'))}}
                        <div class="input-group">
                            <input type="search" class="form-control" name="buscar" placeholder="Buscar" value="{{$buscar}}">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
                <table class="table table-hover table-sm table-responsive">
                    <thead class="bg-dark text-white" >
                        <tr >
                           
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Rol</th>
                            <th>Editar</th>
                            <th>Cambiar Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $us)
                        <tr>
                            
                            <td>{{ $us->nombre }}</td>
                            <td>{{ $us->correo }}</td>


                            <td> 
                                    @if($us->condicion=="1")
                                        <button type="button" class="btn btn-success btn-sm">
                                    
                                          <i class="fa fa-check fa-1x"></i> 
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-danger btn-sm">
                                            
                                            <i class="fa fa-check fa-1x"></i> 
                                        </button>
                                    @endif
                                       
                            </td>
                            <td>{{ $us->rol }}</td>
                            <td> 
                                <button type="button" class="btn btn-secondary btn-md" data-id_usuario="{{$us->id}}" data-id_rol="{{$us->idrol}}" data-nombre="{{$us->nombre}}" data-correo="{{$us->correo}}" data-password="{{$us->password}}" data-toggle="modal" data-target="#editarUsuario">

                                  <i class="fa fa-edit fa-1x"></i> Editar
                                </button> &nbsp;
                            </td>
                            <td>
                            @if($us->condicion)
                                <button type="button" class="btn btn-danger btn-sm" data-id_usuario="{{$us->id}}" data-toggle="modal" data-target="#cambiarEstadoUsuario">
                                    <i class="fa fa-times fa-1x"></i>
                                </button>
                             @else
                                <button type="button" class="btn btn-success btn-sm" data-id_usuario="{{$us->id}}" data-toggle="modal" data-target="#cambiarEstadoUsuario">
                                    <i class="fa fa-lock fa-1x"></i> 
                                </button>
                            @endif
                            </td>
                        </tr>
                    @endforeach   
                    </tbody>
                </table>
                {{$usuarios->render()}}
            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
    </div>


   <!--Inicio del modal agregar/-->
   <div class="modal fade" id="AgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('user.store')}}" method="post"  class="form-horizontal">
                {{ csrf_field() }} 
                    @include('user.form')
                    
                </form>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

<!--Inicio del modal modificar/-->
<div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('user.update','test')}}" method="post"  class="form-horizontal">
                    {{method_field('patch')}}<!-- proteger en la modificacion de registro -->
                    {{ csrf_field() }} 
                    <input type="hidden" id="id_usuario" name="id_usuario" value="">
                    @include('user.form')
                    
                </form>
            </div>
            
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--Fin del modal-->

<!--Inicio del cambiar estado/-->
<div class="modal fade" id="cambiarEstadoUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cambiar estado</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                  <span aria-hidden="true">×</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form action="{{route('user.destroy','test')}}" method="post"  class="form-horizontal">
                    {{method_field('delete')}}<!-- proteger en la modificacion de registro -->
                    {{ csrf_field() }} 
                    <input type="hidden" id="id_usuario" name="id_usuario" value="">
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
   
    
</main>
<!-- /Fin del contenido principal -->
 @endsection