<?php

use App\TypeUser;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeUser::create(['name' => 'Operador', 'slug' => 'operator', 'description' => 'El operador solo podra ser util en la aplicacion movil']);
        TypeUser::create(['name' => 'Cliente', 'slug' => 'client', 'description' => 'El cliente podra asignar los movimientos de logistica del operador']);
    }
}
