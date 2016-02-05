<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model

{
    protected $table = 'obat';

    protected $fillable = ['id_apoteker','nama_obat','harga'];
    protected  $with = ['apoteker'];
    public function apoteker(){
        return $this->belongsTo('App\Domain\Entities\Apoteker','id_apoteker');
    }
}
