<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supir extends Model
{
    protected $fillable = ['foto','nama','jk','no_identitas','alamat','no_hp','harga_sewa'];
    public function sewas()
    {
    	return $this->hasMany('App\sewa');
    }
}
