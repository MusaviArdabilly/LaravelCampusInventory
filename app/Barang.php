<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    protected $primaryKey = 'id';

    protected $fillable = ['item', 'total', 'broken', 'itempic', 'id_ruangan', 'created_by', 'updated_by'];

    public function ruangan(){
    	return $this->belongsTo('App\Ruangan', 'id_ruangan');
    }

    public function user_c(){
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }
    
    public function user_u(){
    	return $this->belongsTo('App\User', 'updated_by', 'id');
    }
}
