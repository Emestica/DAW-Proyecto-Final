<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.categoria', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.categoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorias = new Categoria();
        $tipocategoria = $request->input('tipo');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');
        $porcentaje = $request->input('porcentaje');
        $porcentajed = $request->input('porcentajed');

        $categorias->categoria = $tipocategoria;
        $categorias->estado = $estado;
        $categorias->descripcion = $descripcion;
        $categorias->porcentaje = $porcentaje;
        $categorias->porcentaje_decimal= $porcentajed;

        $categorias->save();

        return redirect("categoria");
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
        $categorias = Categoria::find($id);
        return view('categoria.edit', ['categoria' => $categorias]);
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
        $categorias = Categoria::find($id);
        $tipocategoria = $request->input('tipo');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');
        $porcentaje = $request->input('porcentaje');
        $porcentajed = $request->input('porcentajed');

        $categorias->categoria = $tipocategoria;
        $categorias->estado = $estado;
        $categorias->descripcion = $descripcion;
        $categorias->porcentaje = $porcentaje;
        $categorias->porcentaje_decimal= $porcentajed;

        $categorias->save();

        return redirect("categoria");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();

        return redirect("categoria");
    }
}
