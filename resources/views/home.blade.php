@extends('principal')
@section('contenido')
<main class="main">
    <script>
        if(performance.navigation.type == 2){
            location.reload(true);
         }
        </script>
            <!-- Breadcrumb -->
            <ol class="breadcrumb bg-danger">
                <li class="breadcrumb-item active"><a href="/" style="color: black;"><h5>Sistema de Pedidos AmormioShop</h5> </a></li>
            </ol>
            <div class="container-fluid">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100 img-responsive" src="{{URL::asset('/img/slider1.jpeg')}}" width="100%" height="500px" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100 img-responsive" src="{{URL::asset('/img/slider2.png')}}" width="100%" height="500px" alt="Second slide">
                      </div>
                      
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

            </div>
           
                
        </main>

@endsection