<?php

namespace App\Models;

class Ward extends AbstractModel
{
    public function lga()
    {
        return $this->belongsTo(Lga::class, 'lga_id');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'ward_id');
    }
}
