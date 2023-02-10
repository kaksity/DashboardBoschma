<?php

namespace App\Models;

class MaritalStatus extends AbstractModel
{
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'marital_status_id');
    }
}
