<?php

namespace App\Repositories;

use App\Models\Chirper;


class ChirperRepository
{
    public function getAll()
    {
        Chirper::latest()->get();
    }
}