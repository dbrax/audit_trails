<?php

namespace Epmnzava\AuditTrails;

use Illuminate\Support\ServiceProvider;

class AuditTrailsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'audit_trails');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'audit_trails');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('audit_trails.php'),
            ], 'config');

            //publishing migrations here..

            $this->publishes([
                __DIR__ . '/../database/migrations/create_audit_trail_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_audit_trail_table.php')




            ], 'migrations');






            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/audit_trails'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/audit_trails'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/audit_trails'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'audit_trails');

        // Register the main class to use with the facade
        $this->app->singleton('audit_trails', function () {
            return new AuditTrails;
        });
    }
}
