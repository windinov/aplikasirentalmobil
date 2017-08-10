<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    //
    protected $table="sewas";
    protected $fillable=['tgl_sewa', 'jmlh_hari', 'total_sewa', 'konsumen_id', 'mobil_id', 'supir_id'];
    protected $visible=['tgl_sewa', 'jmlh_hari', 'total_sewa', 'konsumen_id', 'mobil_id', 'supir_id'];

    public function kembali()
    {
    	return $this->hasOne('App\kembali','id');
    }

    public function mobil()
    {
    	return $this->belongsTo('App\mobil','mobil_id');
    }

    public function supir()
    {
    	return $this->belongsTo('App\supir','supir_id');
    }

    public function konsumen()
    {
    	return $this->belongsTo('App\konsumen','konsumen_id');
    }
}
