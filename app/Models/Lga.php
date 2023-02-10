<?php

namespace App\Models;

class Lga extends AbstractModel
{
    public function wards()
    {
        return $this->hasMany(Ward::class, 'lga_id');
    }
}
