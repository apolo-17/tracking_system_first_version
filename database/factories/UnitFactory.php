<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\TypeUnit;
use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {

    $name_unit = ['Kangoo', 'Van', 'Caddy', 'Transporter', 'Crafter', 'Panel', 'Promaster', 'F450', 'Custom', 'Transit Gasolina', 'Express', 'ELF-100', 'Cargo-VAN'];
    $permitted_chars_to_licence_plate = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $models_date_year = ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020'];

    $trademark = ['VOLKSWAGEN', 'TOYOTA', 'RAM', 'FORD', 'CHEVROLET', 'FIAT', 'ISUZU', 'RENAULT', 'PEUGEOT', 'FAW', 'MERCEDES BENZ', 'NISSAN'];

    return [
        'name' => array_rand($name_unit, 1),
        'licence_plate' => substr(str_shuffle($permitted_chars_to_licence_plate), 0, 6),
        'type_unit_id' => TypeUnit::inRandomOrder()->first()->id,
        'model' => $models_date_year[array_rand($models_date_year, 1)],
        'trademark' => $trademark[array_rand($trademark, 1)]
    ];
});
