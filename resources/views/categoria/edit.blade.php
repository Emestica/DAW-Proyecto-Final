@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Editar Categorías.</h6>
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

        <form action="{{ url('categoria/'.$categoria->id_categoria) }}" method="post">

            @method("PUT")

            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Tipo de Categoría:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="0">Seleccione un tipo</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Descripción:</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" maxlength="50" value="{{ $categoria->descripcion }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Porcentaje:</label>
                        <input type="number" step="2" name="porcentaje" id="porcentaje" class="form-control" maxlength="50" value="{{ $categoria->porcentaje }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Porcentaje Decimal:</label>
                        <input type="number" step="0.01" name="porcentajed" id="porcentajed" class="form-control" maxlength="50" value="{{ $categoria->porcentaje_decimal }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="slt-rol">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="0">Seleccione un Estado</option>
                            <option value="A">A</option>
                            <option value="B">D</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
