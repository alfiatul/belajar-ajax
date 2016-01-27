<?php

namespace App\Domain\Contracts;


interface Paginable
{
    public function getByPage($limit = 10);
}