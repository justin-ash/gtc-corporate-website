<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'short_description',
        'detail_text',
        'project_location',
        'project_type',
        'established_date',
        'website',
        'gallery'
    ];

    // 🔥 Important: cast JSON to array
    protected $casts = [
        'gallery' => 'array',
        'established_date' => 'date',
    ];
}
