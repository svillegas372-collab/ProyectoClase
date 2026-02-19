<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="{{ url('/') }}">MiTienda</a>
        </div>

        <ul class="nav-links">
            <li><a href="{{ url('/productos') }}">Productos</a></li>
            <li><a href="{{ url('/producto/crear') }}">Registrar Producto</a></li>
        </ul>

        <div class="nav-cart">
            🛒 Carrito
        </div>
    </div>
</nav>
