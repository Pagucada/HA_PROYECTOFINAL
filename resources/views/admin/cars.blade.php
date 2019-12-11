@extends('layouts.master')

@section('content')

    <div class="container mt-4">
        
        @include('admin.message')
        @include('admin.errors')
        
        <h1>Listado de Autos</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <th>{{ $car->id }}</th>
                        <td>{{ $car->brand->name }}</td>
                        <td>{{ $car->car_model->name }}</td>
                        <td>{{ $car->year }}</td>
                        <td style="width: 200px;">
                            <a href="{{ url('/admin/autos/' . $car->id . '/editar') }}" class="btn btn-sm btn-primary">Editar</a> <a href="{{ url('/admin/autos/' . $car->id . '/eliminar') }}" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div><!-- /.container -->

@endsection
