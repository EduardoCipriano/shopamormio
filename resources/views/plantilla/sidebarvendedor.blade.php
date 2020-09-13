<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}" onclick="event.preventDefault(); document.getElementById('/-form').submit();"><i class="icon-speedometer"></i>Inicio</a> 
                <form id="/-form" action="{{url('/')}}" method="GET" style="display: none;">
                {{csrf_field()}}
                </form>
            </li>
            <li class="nav-title">
                Menú
            </li>

           
    
            
            
            <li class="nav-item">
                <a class="nav-link" href="{{url('pedido')}}" onclick="event.preventDefault(); document.getElementById('pedido-form').submit();"><i class="fa fa-shopping-cart"></i>Pedidos</a> 
                <form id="pedido-form" action="{{url('pedido')}}" method="GET" style="display: none;">
                {{csrf_field()}}
                </form>
            </li>

            
            
                
            
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>