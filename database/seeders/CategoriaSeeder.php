<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Comestibles',
            'descripcion' => 'Alimentos para el consumo humano',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Limpieza',
            'descripcion' => 'Productos de limpieza del hogar',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Higiene',
            'descripcion' => 'Artículos para la higiene personal',
        ]);
        
    }
}
