<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chollo;

class CholloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Definir los datos de los chollos a insertar
        $chollos = [
            [
                'titulo' => 'Chollo 1',
                'descripcion' => 'Descripción del chollo 1',
                'url' => 'https://example.com/chollo1',
                'categoria' => 'Electrónica',
                'puntuacion' => 4.5,
                'precio' => 100,
                'precio_descuento' => 80,
                'disponible' => true,
            ],
            [
                'titulo' => 'Chollo 2',
                'descripcion' => 'Descripción del chollo 2',
                'url' => 'https://example.com/chollo2',
                'categoria' => 'Moda',
                'puntuacion' => 3.8,
                'precio' => 50,
                'precio_descuento' => 40,
                'disponible' => true,
            ],
            [
                'titulo' => 'Chollo 3',
                'descripcion' => 'Descripción del chollo 3',
                'url' => 'https://example.com/chollo3',
                'categoria' => 'Hogar',
                'puntuacion' => 4.0,
                'precio' => 80,
                'precio_descuento' => 60,
                'disponible' => true,
            ],
            [
                'titulo' => 'Chollo 4',
                'descripcion' => 'Descripción del chollo 4',
                'url' => 'https://example.com/chollo4',
                'categoria' => 'Deporte',
                'puntuacion' => 4.2,
                'precio' => 120,
                'precio_descuento' => 100,
                'disponible' => true,
            ],
            [
                'titulo' => 'Chollo 5',
                'descripcion' => 'Descripción del chollo 5',
                'url' => 'https://example.com/chollo5',
                'categoria' => 'Electrodomésticos',
                'puntuacion' => 4.8,
                'precio' => 200,
                'precio_descuento' => 180,
                'disponible' => true,
            ],
        ];

        // Iterar sobre los datos y crear instancias de Chollo
        foreach ($chollos as $cholloData) {
            Chollo::create($cholloData);
        }
    }
}
