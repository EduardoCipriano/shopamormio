@extends('principalproducto')
@section('contenido')


<!--aqui empieza lo de comprar-->
<div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top navbarproducto">
	<div class="container-fluid">
	  <!-- Brand and toggle get grouped for better mobile display -->
	 
  
	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
		<ul class="nav navbar-nav">
		  
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="#">Ropa</a></li>
			  <li><a href="#">Juguetes</a></li>
			  <li><a href="#">Lubricantes</a></li>
			  
			</ul>
		  </li>
		</ul>
		<form class="navbar-form navbar-left">
		  <div class="form-group">
			<input type="text" class="form-control" placeholder="Buscar">
		  </div>
		  <button type="submit" class="glyphicon glyphicon-search btn btn-secondary"  style="font-size: 11px; letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:red ;"></button>
		</form>
		  </li>
		</ul>
	  </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
  </nav>
</div>
<!--Buy-now -->
<div class="buy-now">
	<div class="container">
		<div class="heading-setion-w3ls">
			<h3 class="title-w3layouts">
				<i class="fa fa-heart" aria-hidden="true"></i>
				Selecciona tu artículo favorito
				<i class="fa fa-heart" aria-hidden="true"></i></h3>
		</div>
		<div class="team-grids">
		<!-- Bottom to top-->
			<div class="details-top-w3ls">
				<!-- empieza el articulo-->
				@foreach($productos as $p)
				<div class="col-md-3 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<br>			
						<div class="img">
							<img src="{{asset('storage/img/'.$p->id.'.'.$p->extension)}}"  alt="img">																			
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
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$p->nombre}}" />
												<input type="hidden" name="amount" value="{{$p->precio*1}}" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="USD" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input data-toggle="modal" data-target="#desplegar" data-id="{{$p->id}}"  
												data-nombre="{{$p->nombre}}" data-extension="{{$p->extension}}" data-codigo="{{$p->codigo}}" 
												data-id_categoria="{{$p->id_categoria}}" data-categoria="{{$p->categoria}}" 
												data-descripcion="{{$p->descripcion}}" data-precio="{{$p->precio}}" type="button" name="submit" value="Ver detalles" class="button" />
												
											</fieldset>
										</form>
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
												
										<input hidden id="id_producto" name="id_producto"/>		
										<input  type="submit" name="submit" value="Agregar al carrito" class="btn btn-secondary" style="font-size: 11px;
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
<br>
<!-- //Buy-now -->

@endsection

