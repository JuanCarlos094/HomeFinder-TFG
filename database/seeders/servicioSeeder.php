<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class servicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            'nombre_servicio' => 'Servicios de electricidad Idealuz',
            'tipo_servicio' => 'Electricidad',
            'inicio_prestacion' => '2022-02-25',
            'fin_prestacion' => '2024-03-01',
            'descuento' => 10,
            'fecha_inicio_descuento' => '2022-02-26',
            'fecha_fin_descuento' => '2024-02-28',
        ]);
    }
}
