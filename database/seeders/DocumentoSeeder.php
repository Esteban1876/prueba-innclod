<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'DOC_NOMBRE' => 'General de ingenieria',
                'DOC_CODIGO' => 'INS-ING-1',
                'DOC_CONTENIDO' => 'Ejemplo 1',
                'DOC_ID_TIPO' => '1',
                'DOC_ID_PROCESO' => '1'
            ],
            [
                'DOC_NOMBRE' => 'General de consultoria',
                'DOC_CODIGO' => 'CDU-CST-1',
                'DOC_CONTENIDO' => 'Ejemplo 1',
                'DOC_ID_TIPO' => '2',
                'DOC_ID_PROCESO' => '2'
            ],
            [
                'DOC_NOMBRE' => 'General de desarrollo',
                'DOC_CODIGO' => 'NMA-DES-1',
                'DOC_CONTENIDO' => 'Ejemplo 1',
                'DOC_ID_TIPO' => '3',
                'DOC_ID_PROCESO' => '3'
            ],
            [
                'DOC_NOMBRE' => 'General de soporte',
                'DOC_CODIGO' => 'IFN-SOP-1',
                'DOC_CONTENIDO' => 'Ejemplo 1',
                'DOC_ID_TIPO' => '4',
                'DOC_ID_PROCESO' => '4'
            ],
            [
                'DOC_NOMBRE' => 'General de investigacion',
                'DOC_CODIGO' => 'IDH-INV-1',
                'DOC_CONTENIDO' => 'Ejemplo 1',
                'DOC_ID_TIPO' => '5',
                'DOC_ID_PROCESO' => '5'
            ],
        ];
        DB::table('DOC_DOCUMENTO')->insert($data);
    }
}
