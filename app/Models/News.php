<?php

namespace App\Models;

class News extends AbstractModel
{
    protected $casts = [
        'is_published' => 'boolean'
    ];
}
