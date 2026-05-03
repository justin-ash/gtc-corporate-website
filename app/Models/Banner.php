<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'main_title',
        'description',
        'button_link',
        'image',
        'is_active'
    ];
}
