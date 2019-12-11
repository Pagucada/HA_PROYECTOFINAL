@extends('layouts.master')

@section('content')

<div id="sales">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Ventas</h1>
            </div>
            <div class="col-6">
                <p id="rate" class="text-right">
                    <i class="fas fa-exchange-alt"></i> UYU/USD: <strong>35.10</strong>
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div id="filter">
                <form action="{{ url("ventas") }}" method="GET">
                        <h4>Filtro</h4>
                        <div class="form-group">
                            <label for="select-year">Año</label>
                            <select id="select-year" class="form-control input-sm" name="year">
                                <option value="">Seleccionar...</option>
                                @for ($i = date("Y"); $i >= 1900; $i--)
                                    @if (request('year') == $i)
                                        <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @else
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
                                @endfor
                            </select>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label for="select-brand">Marca</label>
                            <select id="select-brand" class="form-control input-sm" name="brand_id">
                                <option value="">Seleccionar...</option>
                                @foreach ($brands as $brand)
                                    @if (request('brand_id') == $brand->id)
                                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                    @else
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label for="select-model">Modelo</label>
                            <select id="select-model" class="form-control input-sm" name="car_model_id">
                                <option value="">Seleccionar...</option>
                                @foreach ($models as $model)
                                    @if (request('car_model_id') == $model->id)
                                        <option value="{{ $model->id }}" selected>{{ $model->name }}</option>
                                    @else
                                        <option value="{{ $model->id }}">{{ $model->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label for="select-status">Estado</label>
                            <select id="select-status" class="form-control input-sm" name="status">
                                <option value="">Seleccionar...</option>
                                @if (request('status') === "1")
                                    <option value="1" selected>Nuevo</option>
                                @else
                                    <option value="1">Nuevo</option>
                                @endif
                                @if (request('status') === "0")
                                    <option value="0" selected>Usado</option>
                                @else
                                    <option value="0">Usado</option>
                                @endif
                            </select>
                        </div><!-- /.form-group -->

                        <button id="btn-filter" type="submit" name="button" class="btn btn-warning btn-sm btn-block">
                            <i class="fas fa-search"></i> Filtrar
                        </button>
                    </form>
                </div><!-- /#filter -->

                <button id="btn-currency" type="button" name="button" class="btn btn-outline-secondary btn-block btn-sm">
                    <i class="fas fa-dollar-sign"></i> Cambiar moneda
                </button>

            </div><!-- /.col -->

            <div class="col-md-9">

                @if ($cars->isEmpty())
                    <div class="alert alert-warning hidden" role="alert">
                        Lo sentimos, no hay autos para el criterio de búsqueda seleccionado.
                    </div>
                @endif
                
                @foreach ($cars as $car)
                    <div class="car">
                        <div class="row">
                            <div class="col-img col-lg-4">
                                <img src="{{ Storage::url($car->image) }}" alt="{{ $car->brand->name }} {{ $car->car_model->name }}" />
                                @if ($car->status == 1)
                                    <span class="badge badge-warning">Nuevo</span>
                                @endif
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <h3>{{ $car->brand->name }} {{ $car->car_model->name }}</h3>
                                    </div><!-- /.col -->
                                    <div class="col-xl-6">
                                        <div class="car-info">
                                            {{ $car->year }} | USD {{ $car->price_usd }}
                                            <div class="rating">
                                                @for ($i = 1; $i <= $car->rating; $i++)<i class="fas fa-star"></i></i>@endfor<!--
                                                -->@for ($i = $car->rating + 1; $i <= 5; $i++)<i class="far fa-star"></i>@endfor
                                            </div><!-- /.rating -->
                                        </div><!-- /.car-info -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                <p class="car-description">
                                    {{ $car->description }}
                                </p>
                                <div class="car-footer">
                                    <button type="button" name="button" class="btn btn-success btn-sm">
                                        <i class="fas fa-shopping-cart" aria-hidden="true"></i> Comprar
                                    </button>
                                    <button type="button" name="button" class="btn btn-outline-secondary btn-sm">
                                        <i class="far fa-plus-square" aria-hidden="true"></i> Más información
                                    </button>
                                    <button type="button" name="button" class="btn btn-outline-secondary btn-sm">
                                        <i class="far fa-share-square" aria-hidden="true"></i> Compartir
                                    </button>
                                </div><!-- /.car-footer -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                    </div><!-- /.car -->
                @endforeach
                
            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /#sales -->


@endsection