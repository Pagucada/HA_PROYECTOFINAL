@extends('layouts.master')

@section('content')

<style>
    #car1 {
        background-image: url("{{ asset('img/cars_home/audi_1.jpg') }}");
    }

    #car2 {
        background-image: url("{{ asset('img/cars_home/volvo_1.jpg') }}");
    }

    #car3 {
        background-image: url("{{ asset('img/cars_home/audi_2.jpg') }}");
    }

    #car4 {
        background-image: url("{{ asset('img/cars_home/bmw_1.jpg') }}");
    }

    #car5 {
        background-image: url("{{ asset('img/cars_home/bentley_1.jpg') }}");
    }
</style>

<div id="home">

    <!-- Home Carousel -->
    <div id="home-carousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-carousel" data-slide-to="1"></li>
            <li data-target="#home-carousel" data-slide-to="2"></li>
            <li data-target="#home-carousel" data-slide-to="3"></li>
            <li data-target="#home-carousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div id="car1" class="d-block w-100 car-image"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Audi</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div id="car2" class="d-block w-100 car-image"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Volvo</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div id="car3" class="d-block w-100 car-image"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Audi</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div id="car4" class="d-block w-100 car-image"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>BMW</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div id="car5" class="d-block w-100 car-image"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bentley</h5>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div><!-- /#home-carousel -->

    <div class="container">

        <h1 class="page-header">
            Bienvenido a <span>AUTO</span><strong>VIP</strong>
        </h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4><i class="fas fa-car"></i> Venta de 0km</h4>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="{{ url('/ventas') }}" class="btn btn-outline-secondary">Ver autos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4><i class="fas fa-bullhorn"></i> Venta de Usados</h4>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="{{ url('/ventas') }}" class="btn btn-outline-secondary">Ver autos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h4><i class="far fa-file-alt"></i> Trámites</h4>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="{{ url('/ventas') }}" class="btn btn-outline-secondary">Ver trámites</a>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->

</div><!-- /#home -->

@endsection