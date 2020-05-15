<?php

use App\Client;
use App\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = User::where('type_user_id', 2)->get();

        factory(Client::class, count($clients))->create();
    }
}
