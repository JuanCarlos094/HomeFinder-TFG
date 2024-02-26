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
                    'NIF' => '20986478M',
                    'razon_social' => 'Antonio Riquelme Gil',
                    'nombre_comercial' => null,
                    'url' => 'https://antonioexample',
                    'SIMEL' => '23',
                ],
                [
                    'NIF' => '01987463K',
                    'razon_social' => 'gonzalez y hermanos',
                    'nombre_comercial' => 'Merceria Loli',
                    'url' => 'https://mercerialoli',
                    'SIMEL' => '67',
                ],
            ]

        );
    }

}
