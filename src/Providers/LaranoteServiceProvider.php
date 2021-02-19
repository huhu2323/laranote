<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;

class LaranoteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([__DIR__ . '/../migrations/' => database_path('migrations')], 'migrations');
    }

    public function register()
    {
        //
    }

}
