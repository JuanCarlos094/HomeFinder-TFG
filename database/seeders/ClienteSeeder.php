<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\cliente;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('clientes')->insert(
            [
                [
                    'NIF' => '74377715H',
                    'razon_social' => 'Pepe',
                    'nombre_comercial' => null,
                    'url' => 'https://pepeexample',
                    'SIMEL' => '23',
                ],
                [
                    'NIF' => '33245678I',
                    'razon_social' => 'Manolo e hijos',
                    'nombre_comercial' => 'Manolito',
                    'url' => 'https://manolito',
                    'SIMEL' => '67',
                ],
            ]

        );
    }

}
