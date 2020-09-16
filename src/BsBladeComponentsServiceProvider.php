<?php

namespace indrayoga\BsBladeComponents;

use Illuminate\Support\ServiceProvider;

class BsBladeComponentsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'indrayoga');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bs');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/components'),
        ]);

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/bsbladecomponents.php', 'bsbladecomponents');

        // Register the service the package provides.
        $this->app->singleton('bsbladecomponents', function ($app) {
            return new BsBladeComponents;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bsbladecomponents'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../config/bsbladecomponents.php' => config_path('bsbladecomponents.php'),
        ], 'bsbladecomponents.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/indrayoga'),
        ], 'bsbladecomponents.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/indrayoga'),
        ], 'bsbladecomponents.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/indrayoga'),
        ], 'bsbladecomponents.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
