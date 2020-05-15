<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Operator;
use App\TypeUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(Operator::class, function (Faker $faker) {
    $type_lincence = ['A', 'B', 'C', 'D', 'E', 'F'];
    $permitted_chars_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $permitted_chars_numbers = '0123456789';
    $typeUser = TypeUser::where('slug', 'operator')->first()->id;
    return [
        'user_id' => User::where('type_user_id', $typeUser)->inRandomOrder()->first()->id,
        'licence_type' => $type_lincence[array_rand($type_lincence, 1)],
        'licence_date_expiry' => $faker->date(),
        'rfc' => substr(str_shuffle($permitted_chars_letters), 0, 4) . substr(str_shuffle($permitted_chars_numbers), 0, 6),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'born_date' => $faker->date
    ];
});
