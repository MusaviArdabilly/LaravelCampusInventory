<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fakultas;
use Faker\Generator as Faker;

$factory->define(Fakultas::class, function (Faker $faker) {
        
    $listFakultas = [
    	'Ilmu Administrasi', 
    	'Ekonomi Bisnis', 
    	'Ilmu Kelautan',
    	'Ilmu Komputer', 
    	'Ilmu Budaya', 
    	'Kedokteran', 
    	'Perikanan', 
    	'Pertanian', 
    	'Vokasi', 
    	'Teknik', 
    	'Hukum'
    ];

    return [

    	'faculty' => $faker->unique()->randomElement($listFakultas)

    ];
});
