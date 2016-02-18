<?php

namespace Kregel\Contacts;

use Illuminate\Support\ServiceProvider;
use Kregel\Warden\WardenServiceProvider;

class ContactsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(WardenServiceProvider::class);
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'kregel.warden.models');
    }

    /**
     *
     */
    public function boot()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
