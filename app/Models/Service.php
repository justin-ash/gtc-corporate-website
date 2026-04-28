<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'description',
        'is_active'
    ];

    // Scope for active services
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
