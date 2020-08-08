<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // if ($this->app->environment(['production', 'beta'])) {
         //   $this->app['request']->server->set('HTTPS', true);
        //}
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Passport::routes();
        // Passport::personalAccessTokensExpireIn(now()->addDay(1));
    Schema::defaultStringLength(191);
    
    }
}

