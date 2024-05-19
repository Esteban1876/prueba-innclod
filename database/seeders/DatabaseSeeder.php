<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProcesoSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(DocumentoSeeder::class);
    }
}
