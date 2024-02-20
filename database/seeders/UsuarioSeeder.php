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
        //
        DB::table('usuarios')->insert([
            [
            'nombre' => 'Josesito',
            'email'=>'josesito@gmail.com',
            'password' =>  Hash::make('nullnull'),
            'rol'=>'CEO',
            ],
          [
            'nombre' => 'Izan',
            'email'=>'izan@gmail.com',
            'password' =>  Hash::make('nullnull'),
            'rol'=>'administracion',
         ],
           

        ]
        
        );
        $role1= Role::create(["name"=>"CEO"]);
        $role2= Role::create(["name"=>"administracion"]);
        $ceo = usuario::find(1);
        $administrador = usuario::find(2);
        $ceo->assignRole($role1);
        $administrador->assignRole($role2);
    }
    
}
