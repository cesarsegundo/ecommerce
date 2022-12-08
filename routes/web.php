<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MailController;


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
    //admin
    Route::get('/admin/productos', 'showAdmin')->name('products.show.admin');
    Route::delete('/admin/productos/{producto}', 'deleteAdmin')->name('product.delete.admin');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/carrito', "index");
    Route::post('/carrito/{id}', "saveProducts")->name('saveproducts');
    Route::put('/carrito/{cart}', 'updateItem')->name('cart-update');
    Route::delete('/carrito/{cart}', 'delete')->name('cart-delete');
});

Route::controller(MailController::class)->group(function () {
    Route::get('/contacto', 'show')->name('contact.show');
    Route::post('/contacto', 'submit')->name('contact.submit');
});


require __DIR__.'/auth.php';
