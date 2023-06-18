@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>

    <div class="card">
        <form action="{{ url('roles/' . $rols->id_rol) }}" method="post">
            <div class="card-header">
                <h6>Formulario para Editar roles.</h6>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif



                @method('PUT')
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ipt-rol">Rol:</label>
                            <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50"
                                value="{{ $rols->rol }}">
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
                            <label for="txt-descripcion">Descripcion:</label>
                            <textarea name="descripcion" id="txt-descripcion" class="form-control" style="resize: none;" rows="3"
                                maxlength="250">{{ $rols->descripcion }}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right;">Guardar</button>
            </div>
        </form>
    </div>
    <hr>
@endsection
