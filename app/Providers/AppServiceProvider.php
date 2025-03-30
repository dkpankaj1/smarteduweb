<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $this->registerSettings();
    }

    protected function registerSettings(): void
    {
        try {
            View::share("setting", Setting::first());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
