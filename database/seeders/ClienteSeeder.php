<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Insertar registros a la tabla

        DB::table('clientes')->insert([
            [
                'nombres'=> 'Luis Miguel',
                'apellidos'=>'Quispe Toribio',
                'direccion'=>'Av. Santa Cruz',
                'celular'=>'4534534',
                'nit'=>'34543534',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombres'=> 'Juan Gabriel',
                'apellidos'=>'Tola Macabrio',
                'direccion'=>'Av. Montero',
                'celular'=>'445445',
                'nit'=>'3544353',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]

        ]);
    }
}
