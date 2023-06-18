@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Usuarios</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h6>Formulario para Editar Usuarios.</h6>
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
        <form action="{{ url('usuario/'.$usuario->id_usuario ) }}" method="POST">

            @method("PUT")
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ipt-rol">Usuario:</label>
                        <input type="text" name="user" id="user" class="form-control" maxlength="50" value="{{ $usuario->usuario }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slt-rol">Estado:</label>
                        <select name="estado" id="estado" class="form-control" value="{{ $usuario->estado }}">
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
                        <input type="password" name="pass" id="pass" class="form-control" maxlength="50" value="{{ $usuario->contrasenia }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha de Creación:</label>
                            <input type="datetime-local" name="fechaCreate" id="fechaCreate" class="form-control" maxlength="50" value="{{ $usuario->fecha_creacion }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha de Modificación:</label>
                            <input type="datetime-local" name="fechaMod" id="fechaMod" class="form-control" maxlength="50" value="{{ $usuario->fecha_modificacion }}">
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
@endsection
