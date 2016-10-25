<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //CONTAINER. Conté tota la aplicació de Laravel
//$this->app->bind(
//    \App\ManualAuth\Guard::class, \App\ManualAuth\ParameterGuard::class
//);

        $this->app->bind(
            \App\ManualAuth\Guard::class, \App\ManualAuth\CookieGuard::class
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
