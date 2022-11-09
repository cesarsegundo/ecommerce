<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = ['producto_id', 'usuario_id', 'cantidad', 'total'];

    public function user()
    {
    return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
}

