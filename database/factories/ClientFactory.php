<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\Model;
use App\TypeUser;
use App\User;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    $client = TypeUser::where('slug', 'client')->first()->id;
    $permitted_chars_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $permitted_chars_numbers = '0123456789';
    return [
        'user_id' => User::where('type_user_id', $client)->inRandomorder()->first()->id,
        'name' => $faker->name,
        'company' => $faker->company,
        'rfc' => substr(str_shuffle($permitted_chars_letters), 0, 4) . substr(str_shuffle($permitted_chars_numbers), 0, 6),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber
    ];
});
