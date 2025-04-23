<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema; // ✅ Add this line

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
        // ✅ Fix for MySQL older versions (max key length issue)
        Schema::defaultStringLength(191);

        // ✅ Force HTTPS in production based on Laravel config
        if (config('app.env') === 'production' || config('app.force_https')) {
            URL::forceScheme('https');
        }
    }
}
