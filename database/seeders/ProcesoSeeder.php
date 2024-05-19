<?php

namespace Database\Seeders;

use App\Models\Proceso;
use Illuminate\Database\Seeder;

class ProcesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proceso::create(
            [
            'PRO_NOMBRE' => 'Ingenieria',
            'PRO_PREFIJO' => 'ING'
            ],
            [
                'PRO_NOMBRE' => 'Consultoria',
                'PRO_PREFIJO' => 'CST'
            ],
            [
                'PRO_NOMBRE' => 'Desarrollo',
                'PRO_PREFIJO' => 'DES'
            ],
            [
                'PRO_NOMBRE' => 'Soporte',
                'PRO_PREFIJO' => 'SOP'
            ],
            [
                'PRO_NOMBRE' => 'Investigacion',
                'PRO_PREFIJO' => 'INV'
            ]
        );
    }
}
