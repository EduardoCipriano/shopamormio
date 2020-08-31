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
	

    
<!-- //banner -->

    @include('mostrar.navbar')					
											 
				
    @yield('contenido')
    

<br>
<br>
<footer class="copyright container-center">
            
                    <ul class="social-icons3">
                        <p>Nuestras Redes Sociales</p>
                        <li><a href="https://www.facebook.com/amormioshopgt" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/amormio.gt" class="wthree_dribbble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=50254342422" class="wthree_behance" target="_blank"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                        <p>© 2020 Todos los derechos reservados | Creado por <a href="">Camaleón</a></p>
                    </ul>
                               
    
    </div>
</footer>

<!-- js -->

   
<script type="text/javascript" src="{{('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<script src="{{('js/responsiveslides.min.js')}}"></script>
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