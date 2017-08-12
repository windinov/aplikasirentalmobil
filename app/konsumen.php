<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    protected $fillable = ['nama','jk','no_hp','no_identitas','alamat'];
    public function sewas()
    {
    	return $this->hasMany('App\sewa','id_konsumen');
    }
}
