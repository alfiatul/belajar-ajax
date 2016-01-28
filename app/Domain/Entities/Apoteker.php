<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model

{
    protected $table = 'apoteker';

    protected $fillable = ['name','alamat','Jk','notel'];
}
