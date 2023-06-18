@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1>Empleados</h1>

<div class="card">
    <div class="card-header">
        <h6>Formulario para Empleados.</h6>
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
                        <div class="form-group">
                            <label for="ipt-rol">Apellidos:</label>
                            <input type="text" name="rol" id="ipt-rol" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Fecha_Nacimiento:</label>
                            <input type="datetime-local" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Edad:</label>
                            <input type="number" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="txt-descripcion">Dirección:</label>
                        <textarea name="descripcion" id="txt-descripcion" class="form-control" style="resize: none;" rows="3" maxlength="250"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Teléfono Fijo:</label>
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Teléfono Personal:</label>
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Correo Personal:</label>
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Correo Institucional:</label>
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">DUI:</label>
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="ipt-rol">Área de Trabajo:</label>
                            <input type="text" name="fechaNac" id="fechaNac" class="form-control" maxlength="50">
                        </div>
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
                                <th>Fecha Nac</th>
                                <th>Edad</th>
                                <th>Dirección</th>
                                <th>Tel Fijo</th>
                                <th>Celular</th>
                                <th>Correo Personal</th>
                                <th>Correo Institucional</th>
                                <th>DUI</th>
                                <th>Area de Trabajo</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($empleado as $empleado)

                            <tr>
                                <td>{{$empleado->id_empleado}}</td>
                                <td>{{$empleado->nombres}}</td>
                                <td>{{$empleado->fecha_nacimiento}}</td>
                                <td>{{$empleado->apellidos}}</td>
                                <td>{{$empleado->edad}}</td>
                                <td>{{$empleado->direccion}}</td>
                                <td>{{$empleado->telefono}}</td>
                                <td>{{$empleado->celular}}</td>
                                <td>{{$empleado->correo_electronico_personal}}</td>
                                <td>{{$empleado->correo_electronico_institucional}}</td>
                                <td>{{$empleado->dui}}</td>
                                <td>{{$empleado->area_trabajo}}</td>
                                <td>{{$empleado->estado}}</td>
                                <td><a href="{{url('catalog/'.$empleado->id_empleado.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                                <td>
                                    <form action="{{url('catalog/' .$empleado->id_empleado)}}" method="post">
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
