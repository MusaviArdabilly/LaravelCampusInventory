<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barang;
use Faker\Generator as Faker;

$factory->define(Barang::class, function (Faker $faker) {
    
	$list_barang = [
    	'Pengharum ruangan',
    	'Remote Projector',
    	'Converter HDMI',
    	'Projector',
    	'Remote AC',
    	'LCD'
    ];

    return [
        'item' => $faker->randomElement($list_barang),
        'total' => $faker->numberBetween($min = 3, $max = 7),
        'broken' => $faker->numberBetween($min = 0, $max = 3),
        'itempic' => 'defitempic.png',
        'created_by' => 1,
        'id_ruangan' => $faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10])
    ];
});
