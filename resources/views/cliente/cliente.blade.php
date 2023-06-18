@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Clientes.</h6>
    </div>
    <div class="card-body">
        <form action="/guardar-rol" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Nombres:</label>
                        <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Apellidos:</label>
                        <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">DUI:</label>
                        <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha_Nacimiento:</label>
                            <input type="datetime-local" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Edad:</label>
                        <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Estado:</label>
                        <select name="estado" id="slt-estado" class="form-control">
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
                        <label for="ipt-rol">Correo Eltrónico:</label>
                        <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50">
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
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>DUI</th>
                                <th>Fecha Nacimiento</th>
                                <th>Edad</th>
                                <th>Correco Electrónico</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clientes as $cliente)

                            <tr>
                                <td>{{$cliente->id_cliente}}</td>
                                <td>{{$cliente->nombres}}</td>
                                <td>{{$cliente->apellidos}}</td>
                                <td>{{$cliente->dui}}</td>
                                <td>{{$cliente->fecha_nacimiento}}</td>
                                <td>{{$cliente->edad}}</td>
                                <td>{{$cliente->correo_electronico}}</td>
                                <td>{{$cliente->estado}}</td>
                                <td><a href="{{url('catalog/'.$cliente->id_cliente.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('catalog/' .$cliente->id_cliente)}}" method="post">
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
