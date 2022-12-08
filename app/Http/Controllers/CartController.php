<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Producto;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {   
        $pedidos = Cart::where('usuario_id', auth()->id())->get();
        $total_products = Cart::where('usuario_id', auth()->id())->sum('cantidad');
        $sum_total = Cart::where('usuario_id', auth()->id())->sum('total');

        // dd($total_products);
        return view('cart.index')
            ->with([
                'pedidos' => $pedidos,
                'total_products' => $total_products,
                'sum_total' => $sum_total
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
    public function updateItem(Cart $cart, Request $request)
    {
        $product = Producto::findOrFail($cart->producto_id);

        $cart->cantidad = $request->input('cantidad');
        $cart->total = $request->input('cantidad') * $product->precio;
        $cart->save();
        return back();
         
    }
    public function delete(Cart $cart)
    {
        $cart->delete();
        return back();
    }
}