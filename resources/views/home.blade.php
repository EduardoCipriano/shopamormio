@extends('principal')
@section('contenido')
<main class="main">
    <script>
        if(performance.navigation.type == 2){
            location.reload(true);
         }
        </script>
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/">Sistema de Pedidos AmormioShop</a></li>
            </ol>
            <div class="container-fluid">
                    
                    HOME
            </div>
           
                
        </main>

@endsection