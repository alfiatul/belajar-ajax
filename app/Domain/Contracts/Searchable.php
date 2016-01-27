<?php

namespace App\Domain\Contracts;

interface Searchable
{

    public function search($query);
}