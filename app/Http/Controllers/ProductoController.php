<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Role;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.producto', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.producto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $tipoProductos = $request->input('tipo');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');

        $productos->tipo_producto = $tipoProductos;
        $productos->estado = $estado;
        $productos->descripcion = $descripcion;

        $productos->save();

        return redirect("producto");
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
        $productos = Producto::find($id);
        return view('producto.edit', ['producto' => $productos]);
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
        $productos = Producto::find($id);
        $tipoProductos = $request->input('tipo');
        $estado = $request->input('estado');
        $descripcion = $request->input('descripcion');

        $productos->tipo_producto = $tipoProductos;
        $productos->estado = $estado;
        $productos->descripcion = $descripcion;

        $productos->save();

        return redirect("producto");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Producto::find($id);
        $productos->delete();

        return redirect("producto");
    }
}
