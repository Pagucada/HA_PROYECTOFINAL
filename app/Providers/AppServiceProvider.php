<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Hay un problema común con instalaciones viejas de MySQL que se describe en el siguiente link:
        // https://laravel-news.com/laravel-5-4-key-too-long-error
        // Para solucionarlo, se agrega la siguiente línea de código:
        Schema::defaultStringLength(191);

        // Heroku requiere que las URLs sean HTTPS.
        // Por lo tanto es necesario forzar SSL en producción:
        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
