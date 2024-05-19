<?php

namespace Database\Seeders;

use App\Models\TipoDocumento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
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
                'TIP_NOMBRE' => 'Instructivo', 
                'TIP_PREFIJO' => 'INS'
            ],
            [
                'TIP_NOMBRE' => 'Caso de uso', 
                'TIP_PREFIJO' => 'CDU'
            ],
            [
                'TIP_NOMBRE' => 'Normativa', 
                'TIP_PREFIJO' => 'NMA'
            ],
            [
                'TIP_NOMBRE' => 'Infraccion', 
                'TIP_PREFIJO' => 'IFN'
            ],
            [
                'TIP_NOMBRE' => 'Incumplimiento de horario', 
                'TIP_PREFIJO' => 'IDH'
            ]
        ];
        DB::table('TIP_TIPO_DOC')->insert($data);
    }
}
