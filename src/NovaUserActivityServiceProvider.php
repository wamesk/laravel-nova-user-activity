<?php

namespace Wame\LaravelNovaUserActivity;

use Illuminate\Support\ServiceProvider;

class NovaUserActivityServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/Nova/Metrics/ActiveUsersPerDay.php.stub' => app_path('Nova\Metrics\ActiveUsersPerDay.php'),
        ], 'laravel-user-activity-metrics');
    }
}
