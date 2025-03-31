<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Membresía mensual',
            'descripcion' => 'Acceso completo al gimnasio durante 1 mes.',
            'precio' => 30.00,
            'stock' => 100,
            'imagen' => 'membresia.png',
        ]);

        Producto::create([
            'nombre' => 'Proteína en polvo',
            'descripcion' => 'Proteína Whey de alta calidad.',
            'precio' => 45.00,
            'stock' => 50,
            'imagen' => 'proteina.jpg',
        ]);
    }
}
