<?php

namespace App\Models;

class Enrollment extends AbstractModel
{
    public function lga()
    {
        return $this->belongsTo(Lga::class, 'lga_id');
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
    public function facility()
    {
        return $this->belongsTo(Facility::class, 'facility_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class, 'marital_status_id');
    }
}
