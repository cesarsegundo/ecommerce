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
    return $this->belongsTo(User::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}

