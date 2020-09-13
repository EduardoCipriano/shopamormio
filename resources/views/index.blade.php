<!DOCTYPE html>
<html lang="es">
<head>
<title>AmormioShop</title>
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
<link href="{{('css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{('css/styles.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{('//fonts.googleapis.com/css?family=Tangerine:400,700')}}" rel="stylesheet">
<link href="{{('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic')}}" rel='stylesheet' type='text/css'>
</head>

<body class="container-center">

<!-- banner -->
	
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-primary modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="nombre">¡Aviso imporante!</h4>
      </div>
      <div class="modal-body" width="100px" height="100px">
        Somos tienda virtual para adultos en donde encontrarás juguetes y accesorios sexuales.
        Continua únicamente tu visita a nuestra página sí eres mayor de edad
      </div>
      <div class="modal-footer">
        <input  type="button"  value="Soy mayor de edad, continuar"  class="btn btn-secondary" style="font-size: 11px;
        letter-spacing: 1px;text-transform: uppercase;color: #fff;border: none;padding: 10px 17px;background: #000;" data-dismiss="modal"/>									
        <a href="https://www.google.com/" type="button" class="btn btn-secondary"  style="    font-size: 11px;
        letter-spacing: 1px;text-transform: uppercase;	color: #fff;border: none;padding: 10px 17px;background:red ;">Soy menor de edad, salir</a>	
      </div>
    </div>
  </div>
</div>
    
<!-- //banner -->

  @include('mostrar.navbar')	


	
    <div class="banner_top" id="home">
      <div data-vide-bg ="video/gift-packs">
        <div class="center-container">
          <div class="w3_agile_header">
                <div class="w3_agileits_logo">
                <h1><a href="{{url('http://amormioshop.com/')}}">Amor Mio Shop<span>Detalles que enamoran</span></a></h1>
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
              <li><a href="https://www.facebook.com/amormioshopgt" class="wthree_facebook" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/amormio.gt" class="wthree_dribbble" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=50254342422" class="wthree_behance" target="_blank"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          </div>
       </div>
    </div>			
											 
				
    @yield('contenido')
    


<footer class="copyright container-center">
            
                    <ul class="social-icons3">
                        <p>Nuestras Redes Sociales</p>
                        <li><a href="https://www.facebook.com/amormioshopgt" target="_blank" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/amormio.gt" target="_blank" class="wthree_dribbble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=50254342422" class="wthree_behance" target="_blank"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <p>© 2020 Todos los derechos reservados | Creado por <a href="mailto:edsoncipriano810@gmail.com">Camaleón</a></p>
                    </ul>
                               
    
    </div>
</footer>

<!-- js -->

   
<script type="text/javascript" src="{{('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{('js/responsiveslides.min.js')}}"></script>
<script>
  $( document ).ready(function() {
    $('#myModal').modal('toggle')
});
</script>
        <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                      // Slideshow 4
                      $("#slider4").responsiveSlides({
                        auto: true,
                        pager:true,
                        nav:false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                          $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                          $('.events').append("<li>after event fired.</li>");
                        }
                      });
                
                    });
        </script>
<!-- for-Clients -->
    <script src="{{('js/owl.carousel.js')}}"></script>
        <!-- requried-jsfiles-for owl -->
                                <script>
                                    $(document).ready(function() {
                                      $("#owl-demo2").owlCarousel({
                                        items : 1,
                                        lazyLoad : false,
                                        autoPlay : true,
                                        navigation : false,
                                        navigationText :  false,
                                        pagination : true,
                                      });
                                    });
                                  </script>
        <!-- //requried-jsfiles-for owl -->
<!-- //for-Clients -->

<script>
  $('#desplegar').on('show.bs.modal', function (event) {
		var imagen = new Image();
		$('#imagen').empty();		
		button = $(event.relatedTarget)
		var id = button.data('id')
		var extension= button.data('extension')
		var nombre = button.data('nombre')
		var codigo = button.data('codigo')
        var categoria = button.data('categoria')
        var id_categoria = button.data('id_categoria')
        var precio = button.data('precio')
        var descripcion = button.data('descripcion')
   		document.getElementById("nombre").innerHTML = nombre;
		document.getElementById("nomb").innerHTML = nombre;
		document.getElementById("categoria").innerHTML = categoria;
		document.getElementById("precio").innerHTML = precio;
		document.getElementById("descripcion").innerHTML = descripcion;
		document.getElementById("codigo").innerHTML = codigo;
    document.getElementById("imagen").innerHTML='<img src="storage/img/'+id+'.'+extension+'" width="300" height="300"/>';	
    var inputNombre = document.getElementById("id_producto");
    inputNombre.value = id;	
	})
</script>

<!-- video-bg -->
<script src="{{('js/jquery.vide.min.js')}}"></script>
<!-- //video-bg -->
<!-- Nice scroll -->
<script src="{{('js/jquery.nicescroll.js')}}"></script>
<script src="{{('js/scripts.js')}}"></script>
<!-- //Nice scroll -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{('js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v8.0" nonce="6NIVgELP"></script>
</body>
</html>