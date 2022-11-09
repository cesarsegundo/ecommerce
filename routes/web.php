<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::controller(ProductosController::class)->group(function () {
    Route::get('/productos/crear', "create");
    Route::post('/productos/crear', "store");
    Route::get('/productos', "show")->name('products.show');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/carrito', "index");
    Route::post('/carrito/{id}', "saveProducts")->name('saveproducts');
    Route::delete('/carrito/{cart}', 'delete')->name('cart-delete');
});


require __DIR__.'/auth.php';
