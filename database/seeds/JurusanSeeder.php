<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listJurusan = ['Teknik Informatika', 'Ilmu Gizi', 'Ilmu Hukum', 'Desain Grafis', 'Ekonomi Pembangunan', 'Sastra Cina', 'Teknik Mesin', 'Administrasi Perpajakan', 'Agribisnis', 'Budidaya Perairan', 'Manajemen Sumberdaya Perikanan'];

        foreach ($listJurusan as $jurusan){
        	Jurusan::create([
        		'name' => $jurusan
        	]);
        }    
    }
}
