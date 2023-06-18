<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Utils\Constantes;
use Illuminate\Support\Facades\Validator;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('usuario.users', [ 'usuario' => $usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'date' => 'El campo :attribute debe ser una fecha valida',
        ];

        $this->validate($request, [
            'estado' => 'required',
            'pass' => 'required|string',
            'fechaCreate' => 'required|date',
            'fechaMod' => 'required|date',
        ], $messages);

        $usuario = new Usuario();
        $user = $request->input('user');
        $estado = $request->input('estado');
        $pass = $request->input('pass');
        $fechaCreate = $request->input('fechaCreate');
        $fechaMod = $request->input('fechaMod');

        $usuario->usuario = $user;
        $usuario->estado = $estado;
        $usuario->contrasenia = $pass;
        $usuario->fecha_creacion = $fechaCreate;
        $usuario->fecha_modificacion = $fechaMod;

        $usuario->save();

        return redirect("usuario");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = Usuario::find($id);
        return view('usuario.edit', ['usuario' => $usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'El campo :attribute es requerido.',
            'date' => 'El campo :attribute debe ser una fecha valida',
        ];

        $this->validate($request, [
            'estado' => 'required',
            'pass' => 'required|string',
            'fechaCreate' => 'required|date',
            'fechaMod' => 'required|date',
        ], $messages);

        $usuario = Usuario::find($id);
        $user = $request->input('user');
        $estado = $request->input('estado');
        $pass = $request->input('pass');
        $fechaCreate = $request->input('fechaCreate');
        $fechaMod = $request->input('fechaMod');

        $usuario->usuario = $user;
        $usuario->estado = $estado;
        $usuario->contrasenia = $pass;
        $usuario->fecha_creacion = $fechaCreate;
        $usuario->fecha_modificacion = $fechaMod;

        $usuario->save();

        return redirect("usuario");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();

        return redirect("usuario");
    }
}
