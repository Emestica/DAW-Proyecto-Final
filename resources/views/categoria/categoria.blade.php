@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Categorías.</h6>
    </div>
    <div class="card-body">
        <form action="/guardar-rol" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Tipo de Categoría:</label>
                        <select name="estado" id="slt-estado" class="form-control">
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
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
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
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th>Porcentaje</th>
                                <th>Porc Dec</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categorias as $categoria)

                            <tr>
                                <td>{{$categoria->id_categoria}}</td>
                                <td>{{$categoria->categoria}}</td>
                                <td>{{$categoria->descripcion}}</td>
                                <td>{{$categoria->porcentaje}}</td>
                                <td>{{$categoria->porcentaje_decimal}}</td>
                                <td>{{$categoria->estado}}</td>
                                <td><a href="{{url('catalog/'.$categoria->id_categoria.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('catalog/' .$categoria->id_categoria)}}" method="post">
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
