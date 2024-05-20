<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = 
            [
                'name' => 'esteban',
                'email' => 'prueba@gmail.com',
                'password' => Hash::make('esteban1876!'),
            ];
        DB::table('users')->insert($data);
    }
}
