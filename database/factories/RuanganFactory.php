<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ruangan;
use Faker\Generator as Faker;

$factory->define(Ruangan::class, function (Faker $faker) {

	$list_ruangan = [
		'RUB-315',
		'RSI-704',
		'RKH-823',
		'RA-201',
		'RB-220',
		'RB-204',
		'RB-305',
		'RC-402',
		'RE-502',
		'RG-609'
	];

    return [
        'room' => $faker->unique()->randomElement($list_ruangan),
        'id_jurusan' => $faker->unique()->numberBetween($min = 1, $max = 10),
    ];
});
