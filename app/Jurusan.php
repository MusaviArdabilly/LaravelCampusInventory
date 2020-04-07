<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fakultas;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $primaryKey = 'id';

    protected $fillable = ['major', 'id_fakultas'];
    
    public function fakultas(){
    	return $this->belongsTo(Fakultas::class, 'id_fakultas');
    }
}
