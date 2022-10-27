<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'disponibles', 'precio', 'id_categoria'];
    public function categoria()
    {
        return $this->hasOne(Categoria::class);
    }
}