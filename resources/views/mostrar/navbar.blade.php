<div class="banner_top" id="home">
	<div data-vide-bg ="video/gift-packs">
		<div class="center-container">
			<div class="w3_agile_header">
						<div class="w3_agileits_logo">
								<h1><a href="index.html">Amor Mio<span>Detalles que enamoran</span></a></h1>
							</div>
							<div class="w3_menu">
							<div class="agileits_w3layouts_banner_info">
							<div class="image-agileits">
								<img src="img/logo.png" style=" width:120px; height:110px" alt="logo">
							</div>
				
							</div>
								<div class="top-nav">
								<nav class="navbar navbar-default">
									<div class="container">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
										</button>
									</div>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li class="home-icon"><a href="index.html"><span class="fa fa-home fa-2x" aria-hidden="true"></span></a></li>
                                            
                                           
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('catalogo')}}" onclick="event.preventDefault(); document.getElementById('pedido-form').submit();"><i class="fa fa-shopping-cart"></i>Productos</a> 
                                                <form id="catalogo-form" action="{{url('catalogo')}}" method="GET" style="display: none;">
                                                {{csrf_field()}}
                                                </form>
                                            </li>

											<li class="nav-cart-w3ls">
												<form action="#" method="post" class="last"> 
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="display" value="1">
													<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down fa-2x" aria-hidden="true"></i></button>
												</form> 
											</li>
											<li><a href="about.html">Nosotros</a></li>
											<li><a href="contact.html">Contacto</a></li>
										</ul>	
										<div class="clearfix"> </div>
									</div>	
								</nav>	
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
					<li class="agileinfo_share">Compartir</li>
					<li><a href="" class="wthree_facebook" target="_blank"> <i class="fa fa-facebook" aria-hidden="true" target="_blank"></i></a></li>
					<li><a href="https://www.instagram.com/amormio.gt" class="wthree_dribbble" target="_blank"><i class="fa fa-instagram" aria-hidden="true" target="_blank"></i></a></li>
				</ul>
			</div>
      </div>
   </div>
     </div>