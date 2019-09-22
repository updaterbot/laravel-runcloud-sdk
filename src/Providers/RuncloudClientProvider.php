<?php

namespace Mindfullsilence\LaravelRuncloudSdk\Providers;

use Illuminate\Support\ServiceProvider;
use Mindfullsilence\LaravelRuncloudSdk\Clients\RuncloudClient;

class RuncloudClientProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/Runcloud.php',
            'runcloud'
        );

        $this->app->singleton('runcloud.api', function () {
            return new RuncloudClient(
                config('runcloud.connections.main.key'),
                config('runcloud.connections.main.secret')
            );
        });

        $this->app->alias('runcloud.api', RuncloudClient::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__).'/Config/Runcloud.php' => config_path('runcloud.php')
        ]);
    }
}
