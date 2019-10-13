<?php

namespace AshrafSaeed\ClickaTell;

use GuzzleHttp\Client;

use Illuminate\Support\ServiceProvider;

use AshrafSaeed\ClickaTell\ClickaTellClient;

class ClickaTellServiceProvider extends ServiceProvider
{
    /**
     * creating registration of textmessage in booting of servicesprovider.
     *
     * @return null
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/clickatell.php' => config_path('clickatell.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {   

        $this->app->bind('ClickaTell', function($app){

            return new ClickaTellClient(
                $app['config']['clickatell']['access_key']
            );

        });

    }

}

