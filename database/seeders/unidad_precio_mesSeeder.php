<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\unidad_precio_mes;

class unidad_precio_mesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unidad_precio_mes')->insert(
            [
                [
                    'unidad' => 'kW',
                    'precio' => 0.56,
                    'mes' => 'Feb2024',
                ],
                [
                    'unidad' => 'm3',
                    'precio' => 0.76,
                    'mes' => 'Feb2024',
                ],
                [
                    'unidad' => 'dia',
                    'precio' => 0.26,
                    'mes' => 'Feb2024',
                ],


            ]

        );
    }
}
