<?php

use App\TypeUnit;
use App\Unit;
use Illuminate\Database\Seeder;

class TypeUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeUnit::create(['name' => 'Pick-up', 'slug' => 'pick_up', 'description' => '']);
        TypeUnit::create(['name' => 'Furgoneta', 'slug' => 'slug', 'description' => '']);
        TypeUnit::create(['name' => 'Furgon', 'slug' => 'furgon', 'description' => '']);
        TypeUnit::create(['name' => 'Camioneta Refrigerada', 'slug' => 'refrigerated', 'description' => '']);
        TypeUnit::create(['name' => 'Camioneta caja cerrada', 'slug' => 'box', 'description' => '']);
        TypeUnit::create(['name' => 'Camioneta caja de ganado', 'slug' => 'stake', 'description' => '']);
        TypeUnit::create(['name' => 'Van', 'slug' => 'step_van', 'description' => '']);
        TypeUnit::create(['name' => 'Luton', 'slug' => 'luton', 'description' => '']);
        TypeUnit::create(['name' => 'Motocicleta', 'slug' => 'motocicleta', 'description' => '']);
        factory(Unit::class, 10)->create();
    }
}
