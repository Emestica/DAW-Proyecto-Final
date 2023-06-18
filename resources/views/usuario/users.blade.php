{{-- @extends('general\layout') --}}
@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Usuarios.</h6>
    </div>
    <div class="card-body">
        <form action="/guardar-rol" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Usuario:</label>
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Contraseña:</label>
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
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($usuario as $usuario)

                            <tr>
                                <td>{{$usuario->id_usuario}}</td>
                                <td>{{$usuario->usuario}}</td>
                                <td>{{$usuario->estado}}</td>
                                <td><a href="{{url('catalog/'.$usuario->id_usuario.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('catalog/' .$usuario->id_usuario)}}" method="post">
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
