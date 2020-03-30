<?php

use Illuminate\Database\Seeder;
use App\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listFakultas = ['Filkom', 'Kedokteran', 'Hukum', 'Vokasi', 'Ekonomi Bisnis'];

        foreach ($listFakultas as $fakultas){
        	Fakultas::create([
        		'name' => $fakultas
        	]);
        }
    }
}
