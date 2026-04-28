<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    protected $fillable = [
        'page',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    public static function seoByPage($page)
    {
        $seo = SeoPage::where('page', $page)->first();
        return $seo;
    }
}
