<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = Role::all();
        return view('rol.rols', [ 'rol' => $rol]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.rols');
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
        ];

        $this->validate($request, [
            'rol' => 'required|string',
            'estado' => 'required',
            'descripcion' => 'required|string',
        ], $messages);

        $rol = new Role();
        $rols = $request->input('rol');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');

        $rol->rol = $rols;
        $rol->estado = $estado;
        $rol->descripcion = $descripcion;

        $rol->save();

        return redirect("roles");
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
        $rols = Role::find($id);
        return view('rol.edit',compact('rols'));
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
        $rol = Role::find($id);
        $rols = $request->input('rol');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');

        $rol->rol = $rols;
        $rol->estado = $estado;
        $rol->descripcion = $descripcion;

        $rol->save();

        return redirect("roles");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Role::find($id);
        $rol->delete();

        return redirect("roles");
    }
}
