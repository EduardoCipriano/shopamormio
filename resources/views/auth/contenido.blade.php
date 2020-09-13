<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
  <meta name="author" content="Incanatoit.com">
  <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">

  <title>Sistema de pedidos amor mio</title>

  <!-- Icons -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/simple-line-icons.min.css')}}" rel="stylesheet">
    
    <!-- Main styles for this application -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center" style=" 
background: rgba(189,16,0,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(189,16,0,1) 0%, rgba(102,15,0,1) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(189,16,0,1)), color-stop(100%, rgba(102,15,0,1)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(189,16,0,1) 0%, rgba(102,15,0,1) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(189,16,0,1) 0%, rgba(102,15,0,1) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(189,16,0,1) 0%, rgba(102,15,0,1) 100%);
background: radial-gradient(ellipse at center, rgba(189,16,0,1) 0%, rgba(102,15,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bd1000', endColorstr='#660f00', GradientType=1 );
">
  <div class="container" >
    @yield('login')
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/pace.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-editable.min.js')}}"></script>  
    <script src="{{URL::asset('js/Chart.min.js')}}"></script>
    <script src="{{URL::asset('js/template.js')}}"></script>

</body>
</html>