<?php

namespace AwesomeManager\ProjectService\Client;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use AwesomeManager\ProjectService\Client\Contracts as Contracts;

class ClientServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this->app->singleton(Contracts\Client::class, Client::class);
    }

    public function provides()
    {
        return [
            Contracts\Client::class,
        ];
    }
}
