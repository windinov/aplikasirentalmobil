<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $fillable = ['foto','merk','palt_no','spesifikasi','harga_sewa'];
    public function sewas()
    {
    	return $this->hasMany('App\sewa');
    }
}
