<nav id="header" class="navbar navbar-expand-md fixed-top navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img id="header-logo" src="{{ asset('img/automotora_vip_logo.png') }}" alt="AutoVIP" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links" aria-controls="links" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="links" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ventas/0km') }}">Venta 0km</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ventas/usados') }}">Venta Usados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/nosotros') }}">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contacto-modal">Contacto</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ url('/admin/autos') }}"><i class="fas fa-list"></i> Ver autos</a>
                                <a class="dropdown-item" href="{{ url('/admin/autos/crear') }}"><i class="far fa-plus-square"></i> Agregar auto</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ url('/admin/marcas') }}"><i class="fas fa-list"></i> Ver marcas</a>
                                <a class="dropdown-item" href="{{ url('/admin/marcas/crear') }}"><i class="far fa-plus-square"></i> Agregar marca</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ url('/admin/modelos') }}"><i class="fas fa-list"></i> Ver modelos</a>
                                <a class="dropdown-item" href="{{ url('/admin/modelos/crear') }}"><i class="far fa-plus-square"></i> Agregar modelo</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ url('/admin/logout') }}"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>

                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registro</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>