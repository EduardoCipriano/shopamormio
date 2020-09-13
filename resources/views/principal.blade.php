<!DOCTYPE html>
<html lang="es">
    <script>
        if(performance.navigation.type == 2){
            location.reload(true);
         }
        </script>
<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Compras-Ventas con Laravel y Vue Js- webtraining-it.com">
    <meta name="keyword" content="Sistema de pedidos">
    <title>AmormioShop</title>
    
    <!-- Icons -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/simple-line-icons.min.css')}}" rel="stylesheet">
    
    <!-- Main styles for this application -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/bootstrap-editable.css')}}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--PONER LOGO-->
        <!--<a class="navbar-brand" href="#"></a>-->
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Administración</a>
            </li>
           
        </ul>
        
        <ul class="nav navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('logint') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->nombre }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            
        </ul>
    </header>

    <div class="app-body">

        @if(Auth::check())
        @if (Auth::user()->idrol == 1)
            @include('plantilla.sidebarroot')
        @elseif (Auth::user()->idrol == 2)
            @include('plantilla.sidebaradministrador')
        @elseif (Auth::user()->idrol == 3)
            @include('plantilla.sidebarvendedor')
        @else

        @endif

        @endif
        @yield('contenido')
    </div>   

    <footer class="app-footer">
        <span><a style="color: rgb(117, 14, 14);" href="mailto:edsoncipriano810@gmail.com" target="_blank">Camaleón</a> &copy; 2020</span>
        <span class="ml-auto">Desarrollado por <a style="color: rgb(117, 14, 14);" href="mailto:edsoncipriano810@gmail.com">Camaleón</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/pace.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-editable.min.js')}}"></script>  
    <script src="{{URL::asset('js/Chart.min.js')}}"></script>
    <script src="{{URL::asset('js/template.js')}}"></script>


    <script>
        $.fn.editable.defaults.mode = 'inline';
        $.fn.editable.defaults.ajaxOptions = { type: 'PUT' };
        $(document).ready(function() {

            $(".set-guia").editable();

            $(".select-status").editable({
                source: [
                    { value: "creado", text: "Creado"},
                    { value: "enviado", text: "Enviado"},
                    { value: "entregado", text: "Entregado"},
                    { value: "cancelado", text: "Anulado"}
                ]
            });
        });
    </script>

    <script>
        /*EDITAR categoria EN VENTANA MODAL*/
        $('#abrirmodalEditar').on('show.bs.modal', function (event) {
        var botoneditar = $(event.relatedTarget) 
        var nombre_modal_editar = botoneditar.data('nombre')
        var descripcion = botoneditar.data('descripcion')
        var id_categoria = botoneditar.data('id_categoria')
        var modal = $(this)
        modal.find('.modal-body #nombre').val(nombre_modal_editar);
        modal.find('.modal-body #descripcion').val(descripcion);
        modal.find('.modal-body #id_categoria').val(id_categoria);
    })

         /*INICIO ventana modal para cambiar estado de Categoria*/
        
         $('#cambiarEstado').on('show.bs.modal', function (event) {
        var botoncambiarestado = $(event.relatedTarget) 
        var id_categoria = botoncambiarestado.data('id_categoria')
        var modal = $(this)
        
        modal.find('.modal-body #id_categoria').val(id_categoria);
        })


        /*EDITAR producto EN VENTANA MODAL*/
        $('#editarProducto').on('show.bs.modal', function (event) {
        var botoneditar = $(event.relatedTarget) 
        var codigo = botoneditar.data('codigo')
        var nombre = botoneditar.data('nombre')
        var id_categoria = botoneditar.data('id_categoria')
        var precio = botoneditar.data('precio')
        var descripcion = botoneditar.data('descripcion')
        var id_producto = botoneditar.data('id_producto')
        var modal = $(this)
        modal.find('.modal-body #codigo').val(codigo);
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #id_categoria').val(id_categoria);
        modal.find('.modal-body #precio').val(precio);
        modal.find('.modal-body #descripcion').val(descripcion);
        modal.find('.modal-body #id_producto').val(id_producto);
    })

     /*INICIO ventana modal para cambiar estado de Categoria*/
        
    $('#cambiarEstadoProducto').on('show.bs.modal', function (event) {
        var botoncambiarestado = $(event.relatedTarget) 
        var id_producto = botoncambiarestado.data('id_producto')
        var modal = $(this)
        
        modal.find('.modal-body #id_producto').val(id_producto);
    })

    $('#verimagen').on('show.bs.modal', function (event) {

        var imagen = new Image();
        $('#imagen').empty();

        //llenar form para modificiar
        button = $(event.relatedTarget)
        id = button.data('id')
        extension= button.data('extension')
        modal = $(this)
        src = 'storage/img/'+id+'.'+extension;
        imagen.src = src;

        $('.modal-body #imagen').append(imagen);
        modal.find('.modal-body #imagen').val(imagen);
        imagen.style.height = '500px';
        imagen.style.width = '500px';
       
        
        
        
    })

    $('.modal-body #cerrar').on('click', function() {
 
    })

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
		document.getElementById("id_producto").innerHTML = id;
   		document.getElementById("nombre").innerHTML = nombre;
		document.getElementById("nomb").innerHTML = nombre;
		document.getElementById("categoria").innerHTML = categoria;
		document.getElementById("precio").innerHTML = precio;
		document.getElementById("descripcion").innerHTML = descripcion;
		document.getElementById("codigo").innerHTML = codigo;
		document.getElementById("imagen").innerHTML='<img src="storage/img/'+id+'.'+extension+'" width="300" height="300"/>';		
	})

    </script>
    <script>
              /*EDITAR categoria EN VENTANA MODAL*/
        $('#editarUsuario').on('show.bs.modal', function (event) {
        var botoneditar = $(event.relatedTarget) 
        var nombre = botoneditar.data('nombre')
        var correo = botoneditar.data('correo')
        var id_rol = botoneditar.data('id_rol')
        var id_usuario = botoneditar.data('id_usuario')
        var modal = $(this)
        modal.find('.modal-body #nombre').val(nombre);
        modal.find('.modal-body #correo').val(correo);
        modal.find('.modal-body #id_rol').val(id_rol);
        modal.find('.modal-body #id_usuario').val(id_usuario);
    })

         /*INICIO ventana modal para cambiar estado de Categoria*/
        
         $('#cambiarEstadoUsuario').on('show.bs.modal', function (event) {
        var botoncambiarestado = $(event.relatedTarget) 
        var id_usuario = botoncambiarestado.data('id_usuario')
        var modal = $(this)
        
        modal.find('.modal-body #id_usuario').val(id_usuario);
        })
    </script>

   
</body>

</html>