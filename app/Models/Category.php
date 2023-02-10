<?php

namespace App\Models;

class Category extends AbstractModel
{
    public function enrollments()
    {
        return $this->belongsTo(Enrollment::class, 'category_id');
    }
}
