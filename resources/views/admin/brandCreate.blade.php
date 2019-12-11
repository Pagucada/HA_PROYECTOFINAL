@extends('layouts.master')

@section('content')

    <div id="admin-edit" class="container mt-4" style="max-width:600px;">

        @include('admin.message')
        @include('admin.errors')

        <h1>Agregar Marca</h1>

        <form action="{{ url('/admin/marcas/') }}" method="post">

            @csrf

            <div class="form-group">
                <label for="name">Marca</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar marca...">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>

        </form>

    </div><!-- /.container -->

@endsection
