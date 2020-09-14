@extends('principalproducto')

@section('ext')
<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorías<span class="caret"></span></a>
	<ul class="dropdown-menu">
		@foreach($categorias as $c)
		<li><a class="hvr-bounce-to-bottom" href="{{url('/xcat')}}" onclick="event.preventDefault(); document.getElementById('xcat-form{{$c->id}}').submit();">{{$c->nombre}}</a></li>
		<form id="xcat-form{{$c->id}}" action="{{url('/xcat')}}" method="GET" style="display: none;">
				{{csrf_field()}}
				<input class="form-control" type="text" value="{{$c->id}}" name="id" >
			</form>
		@endforeach
	</ul>
</li>

@endsection
@section('contenido')


<!--aqui empieza lo de comprar-->
<!--Buy-now -->
	
<div class="buy-now">	
	<div class="container">		
		<div class="heading-setion-w3ls">
			<div class="agileits_w3layouts_banner_info" >
				{{$buscar=''}}
				{{ Form::open(array('url'=>'/buynow', 'method'=>'GET','autocomplete'=>'off','role'=>'search'))}}
					<input type="search"  placeholder="¿Qué estás buscando?" name="buscar" id="buscar" value="{{$buscar}}">
					<input type="submit" value="Search">
				{{Form::close()}}
			</div> 
			@if(Session::has('message'))
				<div class="alert {{ Session::get('alert-class', 'alert-info') }} " role="alert">
					<strong>{{ Session::get('message') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
		</div>
		<br><br><br>				
		<div class="team-grids">
		<!-- Bottom to top-->
			<div class="details-top-w3ls">
				<!-- empieza el articulo-->
				@foreach($productos as $p) 
				<div class="col-md-3 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<br>			
						<div class="img" style="width: 250px; height: 250px">
							<img src="{{asset('storage/img/'.$p->id.'.'.$p->extension)}}" style="width: 250px; height: 250px" alt="img">																			
						</div>								
						<div class="info">
							<a class="modal-container" type="button" data-toggle="modal" data-id="{{$p->id}}"  
							data-nombre="{{$p->nombre}}" data-extension="{{$p->extension}}" data-codigo="{{$p->codigo}}" 
							data-id_categoria="{{$p->id_categoria}}" data-categoria="{{$p->categoria}}" 
							data-descripcion="{{$p->descripcion}}" data-precio="{{$p->precio}}" data-target="#desplegar">
									<h2 style="color:black"><b>{{ $p->nombre }}</b></h2>
									<h3>Q  {{ $p->precio }}</h3>
							</a>
							<ul>
								<li class="cary-li-w3-agileits">
									<div class="snipcart-details top_brand_home_details">
												<input data-toggle="modal" data-target="#desplegar" data-id="{{$p->id}}"  
												data-nombre="{{$p->nombre}}" data-extension="{{$p->extension}}" data-codigo="{{$p->codigo}}" 
												data-id_categoria="{{$p->id_categoria}}" data-categoria="{{$p->categoria}}" 
												data-descripcion="{{$p->descripcion}}" data-precio="{{$p->precio}}" type="button" name="submit" value="Ver detalles" class="button" />
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- end normal -->
				</div>
				@endforeach	
				<div class="modal fade" id="desplegar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
					style="display: none;" aria-hidden="true">
					<div class="modal-dialog modal-primary modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="nombre"></h4>							
							</div>						
							<div class="modal-body" width="100px" height="100px">	
								<div class="row">
									<div class="col-md-5" id="imagen">											
									</div>
									<div class="col-md-7 ml-auto">
										<div class="table-responsive">										
											<table class="table">
												<thead>
													<tr>
														<th scope="col" colspan="2" class="text-center">Información de artículo</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">Código</th>
														<td id="codigo"></td>
													</tr>	
													<tr>
														<th scope="row">Nombre</th>
														<td id="nomb"></td>
													</tr>
													<tr>
														<th scope="row">Categoría</th>
														<td id="categoria"></td>
													</tr>
													<tr>
														<th scope="row">Precio</th>
														<td id="precio"></td>
													</tr>
													<tr>
														<th scope="row">Descripción</th>
														<td id="descripcion"></td>
													</tr>											
												</tbody>												
											</table>
										</div>
									</div>
								</div>
								<form action="{{route('in_shopping_carts.store','test')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
								
									{{ csrf_field() }} 
									<div class="modal-footer">										
										<input hidden id="id_producto" name="id_producto" />
										<input hidden id="pre" name="pre" />
										<button type="button" class="btn btn-primary" disabled style="border: none; background: #fff;color: #000  "><h1>Cantidad</h1></button>
										<button type="button" class="btn btn-secondary" id="cant" style="    font-size: 20px;
										letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px; ;"><div id="cant"></div></button>									
										<input  type="submit" name="submit" value="Agregar al carrito"  class="btn btn-secondary" style="font-size: 11px;
										letter-spacing: 1px;text-transform: uppercase;color: #fff;border: none;padding: 10px 17px;background: #000;" />									
										<button type="button" class="btn btn-secondary" data-dismiss="modal" style="    font-size: 11px;
										letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:red ;">Cancelar</button>		
										
									</div>
								</form>	
							</div>
														
							
							<!-- /.modal-content -->
						</div>
							<!-- /.modal-dialog -->
					</div>
						<!--Fin del modal-->						
				</div>
					<!-- end Bottom to top-->
			</div>
		</div>
	</div>
</div>
<br>
<!-- //Buy-now -->

@endsection

