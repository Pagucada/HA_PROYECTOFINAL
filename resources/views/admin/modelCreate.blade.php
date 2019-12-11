@extends('layouts.master')

@section('content')

    <div id="admin-edit" class="container mt-4" style="max-width:600px;">

        @include('admin.message')
        @include('admin.errors')

        <h1>Agregar Modelo</h1>

        <form action="{{ url('/admin/modelos') }}" method="post">

            @csrf

            <div class="form-group">
                <label for="select-brand">Marca</label>
                <select id="select-brand" class="form-control input-sm" name="brand_id">
                    <option value="">Seleccionar...</option>
                    @foreach ($brands as $brand)
                        @if (old('brand_id') == $brand->id)
                            <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                        @else
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Modelo</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingresar modelo..." value="{{ old('name') }}">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>

        </form>

    </div><!-- /.container -->

@endsection
