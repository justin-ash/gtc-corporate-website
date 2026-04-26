<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = cache()->rememberForever('settings', function () {
            return Setting::pluck('value', 'key')->toArray();
        });

        foreach ($settings as $key => $value) {
            config(["settings.$key" => $value]);
        }
        Paginator::useBootstrapFive();
    }
}
