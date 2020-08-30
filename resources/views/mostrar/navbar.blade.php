<div class="top-nav">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<button type="button" class="navbar-toggle collapsed" style="text-color: white;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="home-icon"><a href="index.html"><span class="fa fa-home fa-2x" aria-hidden="true"></span></a></li>
				
			
				
				<li class="nav-item">
					<a class="nav-link" href="{{url('/buynow')}}" onclick="event.preventDefault(); document.getElementById('buynow-form').submit();">Producto</a> 
					<form id="buynow-form" action="{{url('/buynow')}}" method="GET" style="display: none;">
					{{csrf_field()}}
					</form>
				</li>

				
				
				<li class="nav-item">
					<a class="nav-link" href="{{url('nosotros')}}" onclick="event.preventDefault(); document.getElementById('nosotros-form').submit();">Nosotros</a> 
					<form id="nosotros-form" action="{{url('nosotros')}}" method="GET" style="display: none;">
					{{csrf_field()}}
					</form>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="{{url('contacto')}}" onclick="event.preventDefault(); document.getElementById('contacto-form').submit();">Contacto</a> 
					<form id="contacto-form" action="{{url('contacto')}}" method="GET" style="display: none;">
					{{csrf_field()}}
					</form>
				</li>
				<li class="nav-cart-w3ls">	
							
					<a class="nav-link">
						<i class="fa fa-cart-arrow-down fa-1x" aria-hidden="true"></i>
						<span style="color: font-size: 18px; color: #d22626; font-weight: bold; text-shadow: 1px 1px 2px #000; padding: 7px;
						line-height: 19px;">{{$shopping_cart->productsSize()}}
						</span>
					</a>												 
				</li>
			</ul>	
			<div class="clearfix"> </div>
		</div>	
	</nav>
</div>
<br>
<br>
<br>
<br>
<div class="banner_top" id="home">
	<div data-vide-bg ="video/gift-packs">
		<div class="center-container">
			<div class="w3_agile_header">
						<div class="w3_agileits_logo">
						<h1><a href="{{url('/')}}">Amor Mio<span>Detalles que enamoran</span></a></h1>
							</div>
							<div class="w3_menu">
							<div class="agileits_w3layouts_banner_info">
							<div class="image-agileits">
								<img src="img/logo.png" style=" width:120px; height:110px" alt="logo">
							</div>
				
							</div>
								
						</div>

					<div class="clearfix"></div>
			    </div>
				<!-- banner-text -->
				<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
											<h4>Somos</h4>
												<h3>El guardián de tus íntimos deseos</h3>
											</div>	
								</li>
								<li>
									<div class="agileits-banner-info">
											<h4>Disfruta</h4>
												<h3>de tu sexualidad libremente</h3>
											</div>	
								</li>
								<li>
									<div class="agileits-banner-info">
											   <h4>Que cada </h4>
											   <h3>Momento sea único e inolvidable</h3>
											</div>	
								</li>
							</ul>
						</div>
				</div>
			
			<!--banner Slider starts Here-->
			<div class="w3_agileits_social_media ">
				<ul class="social-icons3">
					<li class="agileinfo_share">Nuestras Redes</li>
					<li><a href="https://www.facebook.com/amormioshopgt" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/amormio.gt" class="wthree_dribbble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://api.whatsapp.com/send?phone=50254342422" class="wthree_behance" target="_blank"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
				</ul>
			</div>
      </div>
   </div>
     </div>