<?php

namespace Huwei1994\Test3;

use Illuminate\Support\ServiceProvider;

class TestServiceProvides extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views', 'test3');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/user'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Huwei1994\Test3\UserController');
    }
}
