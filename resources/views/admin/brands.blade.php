@extends('layouts.master')

@section('content')

    <div class="container mt-4">
        
        @include('admin.message')
        
        <h1>Listado de Marcas</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <th>{{ $brand->id }}</th>
                        <td>{{ $brand->name }}</td>
                        <td style="width: 200px;">
                            <a href="{{ url('/admin/marcas/' . $brand->id . '/editar') }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{ url('/admin/marcas/' . $brand->id . '/eliminar') }}" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div><!-- /.container -->

@endsection
