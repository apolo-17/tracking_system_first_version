<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeUserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TypeUnitSeeder::class); //In this seeder you will find the creation of units
        $this->call(OperatorSeeder::class);
        $this->call(ClientSeeder::class);
    }
}
