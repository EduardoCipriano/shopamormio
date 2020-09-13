<!DOCTYPE html>
<html lang="es">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sistema Ventas Laravel Vue Js- IncanatoIT">
  <meta name="author" content="Incanatoit.com">
  <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">

  <title>Sistema Ventas - IncanatoIT</title>

  <!-- Icons -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/simple-line-icons.min.css')}}" rel="stylesheet">
    
    <!-- Main styles for this application -->
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
  <div class="container">
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