<?php

namespace HaymeTG\Laranote;

use Illuminate\Support\ServiceProvider;

class LUUIDServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([__DIR__ . '/../migrations/' => database_path('migrations')], 'migrations');
    }

    public function register()
    {

    }

}
