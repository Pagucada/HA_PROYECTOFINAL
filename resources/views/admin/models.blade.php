@extends('layouts.master')

@section('content')

    <div class="container mt-4">
        
        @include('admin.message')
        
        <h1>Listado de Modelos</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($models as $model)
                    <tr>
                        <th>{{ $model->id }}</th>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->brand->name }}</td>
                        <td style="width: 200px;">
                            <a href="{{ url('/admin/modelos/' . $model->id . '/editar') }}" class="btn btn-sm btn-primary">Editar</a> <a href="{{ url('/admin/modelos/' . $model->id . '/eliminar') }}" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div><!-- /.container -->

@endsection
