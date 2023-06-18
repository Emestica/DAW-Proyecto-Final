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

        <form action="{{ url('categoria') }}" method="post">

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
                            <input type="text" name="descripcion" id="descripcion" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Porcentaje:</label>
                        <input type="number" step="2" name="porcentaje" id="porcentaje" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Porcentaje Decimal:</label>
                        <input type="number" step="0.01" name="porcentajed" id="porcentajed" class="form-control" maxlength="50">
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
                                <td><a href="{{url('categoria/'.$categoria->id_categoria.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('categoria/' .$categoria->id_categoria)}}" method="post">
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
