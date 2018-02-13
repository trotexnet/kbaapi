<?php

namespace Cierra\Kbaapi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class KbaapiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/Config/kbaapi.php' => config_path('kbaapi.php'),
        ], 'kbaapi_config');

        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                \Cierra\Kbaapi\Commands\KbaapiCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/Kbaapi.php', 'Kbaapi'
        );
    }
}
