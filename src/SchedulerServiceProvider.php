<?php

namespace Hesto\LaravelScheduler;

use Illuminate\Support\ServiceProvider;

class SchedulerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations/');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->registerInstallCommand();
    }

    /**
     * Register the scheduler:install command.
     */
    private function registerInstallCommand()
    {
        $this->app->singleton('command.hesto.scheduler.install', function ($app) {
            return $app['Hesto\LaravelScheduler\Commands\SchedulerInstallCommand'];
        });

        $this->commands('command.hesto.scheduler.install');
    }
}
