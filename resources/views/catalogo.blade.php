<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Prezzie an Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Buy now :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="prezzie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!--aqui empieza lo de comprar-->
<!--Buy-now -->
	<div class="buy-now">
		<div class="container">
			<div class="heading-setion-w3ls">
				<h3 class="title-w3layouts"><i class="fa fa-heart" aria-hidden="true"></i>Selecciona tu artículo favorito<i class="fa fa-heart" aria-hidden="true"></i></h3>
			</div>
				<div class="team-grids">
					<!-- Bottom to top-->
					<div class="details-top-w3ls">

						<!-- empieza el articulo-->
						@foreach($productos as $p)
						<a  class="modal-container" type="button" data-toggle="modal" data-id="{{$p->id}}"  data-nombre="{{$p->nombre}}" data-extension="{{$p->extension}}" data-target="#desplegar">
						<div class="col-md-3 team-grid">
							<!-- normal -->
							<div class="ih-item circle effect10 bottom_to_top">
								<br>							

								<div class="img">
										<img src="{{asset('storage/img/'.$p->id.'.'.$p->extension)}}"  alt="img">									
								</div>
								
								<div class="info">
									<h2 style="color:black"><b>{{ $p->nombre }}</b></h2>
									<h3>Q  {{ $p->precio }}</h3>
									<ul>
										<li class="cary-li-w3-agileits">
											<div class="snipcart-details top_brand_home_details">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Product #001" />
														<input type="hidden" name="amount" value="95.00" />
														<input type="hidden" name="discount_amount" value="0.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Agregar al carrito" class="button" />
													</fieldset>
												</form>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- end normal -->
						</div>
						<!-- termina el articulo -->
						</a> 
						@endforeach	
						<div class="modal fade" id="desplegar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
							<div class="modal-dialog modal-primary modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<div id="nombre"></div>
										<h4 class="modal-title" id="nombre"></h4>
										<label type="text" class="form-control" placeholder="Ingrese precio" id="nombre" name="precio"></label>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">x</button>
									</div>
								

									
										<div id="imagen" class="img" width="100%" height="100%">
											
										</div>

									</div>
									
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

<!-- //Buy-now -->

<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart-js -->
	<script src="js/minicart.min.js"></script>





	<script>
		// Mini Cart
		paypal.minicart.render({
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal.minicart.reset();
		}

	$('#desplegar').on('show.bs.modal', function (event) {

		var imagen = new Image();
		$('#imagen').empty();
		
	
		//llenar form para modificiar
		button = $(event.relatedTarget)
		var id = button.data('id')
		var extension= button.data('extension')
		var nombre = button.data('nombre')
		modal = $(this)	
		modal.find('.modal-header #nombre').val(nombre);
		src = 'storage/img/'+id+'.'+extension;
		imagen.src = src;
		$('.modal-body #imagen').append(imagen);
	})
	</script>
<!-- //cart-js --> 
<!-- video-bg -->
<script src="js/jquery.vide.min.js"></script>
<!-- //video-bg -->
<!-- Nice scroll -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- //Nice scroll -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>