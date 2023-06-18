@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Productos.</h6>
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

        <form action="{{ url('producto') }}" method="post">

            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Tipo de Producto:</label>
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
                        <textarea name="descripcion" id="txt-descripcion" class="form-control" style="resize: none;" rows="3" maxlength="250"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
            </div>
        </form>
    </div>
</div>
<hr>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Descripción</th>
                                <th>Tipo Producto</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($productos as $producto)

                            <tr>
                                <td>{{$producto->id_producto}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->tipo_producto}}</td>
                                <td>{{$producto->estado}}</td>
                                <td><a href="{{url('producto/'.$producto->id_producto.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('producto/' .$producto->id_producto)}}" method="post">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
