

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Administrador</a>
            </li>
            <li class="nav-title">
                Menú
            </li>

           
    
            <li class="nav-item">
                <a class="nav-link" href="{{url('categoria')}}" onclick="event.preventDefault(); document.getElementById('categoria-form').submit();"><i class="fa fa-list"></i>Categorías</a> 
                <form id="categoria-form" action="{{url('categoria')}}" method="GET" style="display: none;">
                {{csrf_field()}}
                </form>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{url('producto')}}" onclick="event.preventDefault(); document.getElementById('producto-form').submit();"><i class="fa fa-tasks"></i>Productos</a> 
                <form id="producto-form" action="{{url('producto')}}" method="GET" style="display: none;">
                {{csrf_field()}}
                </form>
            </li>
              
    
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Pedidos</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user"></i> Usuarios</a>
            </li>
                
            
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>