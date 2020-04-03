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
        $listFakultas = ['Ilmu Komputer', 'Kedokteran', 'Hukum', 'Vokasi', 'Ekonomi Bisnis', 'Ilmu Budaya', 'Teknik', 'Ilmu Administrasi', 'Pertanian', 'Perikanan', 'Ilmu Kelautan'];

        foreach ($listFakultas as $fakultas){
        	Fakultas::create([
        		'name' => $fakultas
        	]);
        }
    }
}
