<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductosController extends Controller
{
    public function create()
    {
        return view('products.create-product');
    }
    public function store(Request $request)
    {
        //Producto::create($request->all());

        $nameImage = $request->image->getClientOriginalName();
        $producto = new Producto;

        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->image = $nameImage;
        $producto->disponibles = $request->input('disponibles');
        $producto->precio = $request->input('precio');
        $producto->categoria_id = $request->input('categoria_id');

        $request->image->move(public_path('images'), $nameImage);
        $producto->save();

        return redirect('/productos');
    }
    public function show()
    {
        $productos = Producto::all();
        return view('products.productos')->with(['productos' => $productos]);
    }
}
