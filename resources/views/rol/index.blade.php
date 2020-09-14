@extends('principal')
 @section('contenido')
 <!-- Contenido Principal -->
 <main class="main">
    <script>
        if(performance.navigation.type == 2){
            location.reload(true);
         }
        </script>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Sistema de Pedidos AmormioShop</a></li>
    </ol>
    <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
               <h2>Listado de Roles</h2><br/>
                
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
                        {{ Form::open(array('url'=>'rol', 'method'=>'GET','autocomplete'=>'off','role'=>'search'))}}
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
                            <th>Descripción</th>
                            <th>Estado</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $r)
                        <tr>
                            
                            <td>{{ $r->nombre }}</td>
                            <td>{{ $r->descripcion }}</td>


                            <td> 
                                    @if($r->condicion=="1")
                                        <button type="button" class="btn btn-success btn-sm">
                                    
                                          <i class="fa fa-check fa-1x"></i> 
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-danger btn-sm">
                                            
                                            <i class="fa fa-check fa-1x"></i> 
                                        </button>
                                    @endif
                                       
                            </td>
                        </tr>
                    @endforeach   
                    </tbody>
                </table>
                {{$roles->render()}}
            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
    </div>
   
    
</main>
<!-- /Fin del contenido principal -->
 @endsection