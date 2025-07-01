<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\usuario;



class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar usuarios
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Jaime',
                'email' => 'ejemplo@gmail.com',
                'password' => Hash::make('12345678'),
                'rol' => 'admin',
            ],
            [
                'nombre' => 'Juanca',
                'email' => 'ejemplo1@gmail.com',
                'password' => Hash::make('null'),
                'rol' => 'usuario',
            ],
            [
                'nombre' => 'Alvaro',
                'email' => 'ejemplo2@gmail.com',
                'password' => Hash::make('null'),
                'rol' => 'usuario',
            ],
        ]);

        // Crear roles si no existen
        $roleAdmin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
$roleUsuario = Role::firstOrCreate(['name' => 'usuario', 'guard_name' => 'web']);


        // Asignar roles a usuarios si existen
        if ($admin = Usuario::find(1)) {
            $admin->assignRole($roleAdmin);
        }

        if ($usuario1 = Usuario::find(2)) {
            $usuario1->assignRole($roleUsuario);
        }

        if ($usuario2 = Usuario::find(3)) {
            $usuario2->assignRole($roleUsuario);
        }
    }
}
