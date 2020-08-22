<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Compras-Ventas con Laravel y Vue Js- webtraining-it.com">
    <meta name="keyword" content="Sistema Compras-Ventas con Laravel y Vue Js">
    <title>Proyecto</title>
    <!-- Icons -->
    <link href="{{('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('css/simple-line-icons.min.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{('css/style.css')}}" rel="stylesheet">
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
                <a class="nav-link" href="#">Administrador</a>
            </li>
           
        </ul>
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">usuario </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>
                    <a class="dropdown-item" href="" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-lock"></i> Cerrar sesión</a>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                      
                    </form>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">

        @include('plantilla.sidebar')

        @yield('contenido')
    </div>   

    <footer class="app-footer">
        <span><a href="http://www.webtraining-it.com/">webtraining-it.com</a> &copy; 2020</span>
        <span class="ml-auto">Desarrollado por <a href="http://www.webtraining-it.com/">webtraining-it.com</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{('js/jquery.min.js')}}"></script>
    <script src="{{('js/popper.min.js')}}"></script>
    <script src="{{('js/bootstrap.min.js')}}"></script>
    <script src="{{('js/pace.min.js')}}"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{('js/Chart.min.js')}}"></script>
    <!-- GenesisUI main scripts -->
    <script src="{{('js/template.js')}}"></script>

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
    })

    $('.modal-body #cerrar').on('click', function() {
 
    })


    </script>
</body>

</html>