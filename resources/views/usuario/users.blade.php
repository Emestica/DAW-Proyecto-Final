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
        <form action="{{ url('usuario') }}" method="post">

            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" maxlength="50" value="{{ old('user') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="0">Seleccione un estado</option>
                            <option value="A">Activo</option>
                            <option value="D">Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Contraseña:</label>
                        <input type="password" name="pass" id="pass" class="form-control" maxlength="50">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha de Creación:</label>
                            <input type="datetime-local" name="fechaCreate" id="fechaCreate" class="form-control" maxlength="50" value="{{ old('fechaCreate') }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha de Modificación:</label>
                            <input type="datetime-local" name="fechaMod" id="fechaMod" class="form-control" maxlength="50" value="{{ old('fechaMod') }}">
                        </div>
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
                                <th>Usuario</th>
                                <th>Fecha Creacion</th>
                                <th>Fecha Modificación</th>
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
                                <td>{{$usuario->fecha_creacion}}</td>
                                <td>{{$usuario->fecha_modificacion}}</td>
                                <td>{{$usuario->estado}}</td>
                                <td><a href="{{url('usuario/'.$usuario->id_usuario.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('usuario/' .$usuario->id_usuario)}}" method="post">
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
