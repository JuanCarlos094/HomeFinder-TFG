<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cups')->insert(
            [
                [
                    'cliente_id'=> '1',
                    'cod_cups' => 'ES0397827291143213XW',
                    'direccion' => 'Calle hola, Elche',
                ],
                [
                    'cliente_id'=> '2',
                    'cod_cups' => 'ES0022670430140321VA',
                    'direccion' => 'Calle adios, Elche',
                ],
            ]

        );
    }
}
