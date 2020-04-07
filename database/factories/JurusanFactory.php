<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Jurusan;
use Faker\Generator as Faker;

$factory->define(Jurusan::class, function (Faker $faker) {

	$listJurusan = [
		'Manajemen Sumberdaya Perikanan',
		'Administrasi Perpajakan', 
		'Ekonomi Pembangunan', 
		'Teknik Informatika', 
		'Budidaya Perairan', 
		'Desain Grafis', 
		'Teknik Mesin', 
		'Sastra Cina', 
		'Ilmu Hukum', 
		'Agribisnis', 
		'Ilmu Gizi' 
	];

    return [
        
        'major' => $faker->unique()->randomElement($listJurusan),
        'id_fakultas' => $faker->numberBetween($min = 1, $max = 11)

    ];
});
