<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jurusan;

class Ruangan extends Model
{
    protected $table = 'ruangan';

    protected $primaryKey = 'id';

    protected $fillable = ['room', 'id_jurusan'];

    public function jurusan(){
    	return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
}
