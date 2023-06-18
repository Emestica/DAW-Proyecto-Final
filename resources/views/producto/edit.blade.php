@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Editar Productos.</h6>
    </div>
    <div class="card-body">

        @if ($errors -> any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ url('producto/'.$producto->id_producto) }}" method="post">

            @method("PUT")

            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-producto">Tipo de Producto:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="0">Seleccione un tipo</option>
                            <option value="A">Préstamo</option>
                            <option value="A">Tarjeta de débido</option>
                            <option value="A">Tarjeta de crédito</option>
                            <option value="A">Cuenta de ahorro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="0">Seleccione un estado</option>
                            <option value="A">Activo</option>
                            <option value="A">Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="txt-descripcion">Descripción:</label>
                        <textarea name="descripcion" id="txt-descripcion" class="form-control" style="resize: none;" rows="3" maxlength="250" value="{{ $producto->descripcion }}"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
