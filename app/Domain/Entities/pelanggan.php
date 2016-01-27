<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = ['name','alamat','noantrian','Jk','notel'];
}
