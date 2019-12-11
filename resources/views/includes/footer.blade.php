<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img id="footer-logo" src="{{ asset('img/automotora_vip_logo.png') }}" alt="AutoVIP" />

            </div><!-- /.col -->
            <div class="col-md-3">
                <ul>
                    <li><a href="{{ url('/ventas') }}">Venta 0km</a></li>
                    <li><a href="{{ url('/ventas') }}">Venta Usados</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-md-3">
                <ul>
                    <li><a href="{{ url('/nosotros') }}">Sobre Nosotros</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#contacto-modal">Contacto</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-md-3">
                <p style="color:#DDD;">Copyright &copy; AutoVIP {{ date("Y") }}</p>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /#footer -->