<div class="top-nav">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<button type="button" class="navbar-toggle collapsed" style="text-color: white;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="home-icon"><a href="{{url('http://amormioshop.com/')}}"><img src="{{URL::asset('img/logo.png')}}" style=" width:25px; height:19px" alt="logo"></a></li>
				
			
				
				<li class="nav-item">
					<a class="nav-link" href="{{url('/buynow')}}" onclick="event.preventDefault(); document.getElementById('buynow-form').submit();">Productos</a> 
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
				
				@yield('ext')
				<li class="nav-cart-w3ls">	
							
					<a class="nav-link" href="{{url('/carrito')}}" onclick="event.preventDefault(); document.getElementById('carrito-form').submit();">
						<form id="carrito-form" action="{{url('/carrito')}}" method="get" style="display: none;">
							{{csrf_field()}} 
						</form>
						<i class="fa fa-cart-arrow-down fa-1x" aria-hidden="true"></i>
						<span style="color: font-size: 18px; color: #d22626; font-weight: bold; text-shadow: 1px 1px 2px #000; padding: 7px;
						line-height: 19px;">{{$productsCount}}
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
