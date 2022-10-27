<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Producto;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {   
        $pedidos = Cart::all();
        return view('cart.index')
            ->with([
                'pedidos' => $pedidos
            ]);
    }
    public function saveProducts($id)
    {
        $product = Producto::findOrFail($id);
        //dd($product);
        Cart::create([
            'producto_id' => $product->id,
            'usuario_id' => auth()->id(),
            'cantidad' => 1,
            'total' => $product->precio
        ]);
        return redirect(route('products.show'));    
    }
}