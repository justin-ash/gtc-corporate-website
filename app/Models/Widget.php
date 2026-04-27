<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = [
        'title',
        'description',
        'widget_code',
        'is_active'
    ];

    public static function formatWidgets($pages)
    {
        $widgets = Widget::where('is_active', 1)->whereIn('page', $pages)->get();
        $formatted = [];
        foreach ($widgets as $widget) {
            $formatted[$widget->widget_code]['title'] = $widget['title'];
            $formatted[$widget->widget_code]['description'] = $widget['description'];
        }
        return $formatted;
    }
}
