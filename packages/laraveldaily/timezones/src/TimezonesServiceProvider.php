<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->publishes([__DIR__.'/public/images'=>public_path('vendor/images')],'public');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views','Laraveldaily-Timezones');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }
}
