<?php

use App\Operator;
use App\User;
use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $operators = User::where('type_user_id', 1)->get();

        factory(Operator::class, count($operators))->create();
    }
}
