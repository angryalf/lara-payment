<?php

namespace Angryalf\LaraPayments;

use Illuminate\Support\ServiceProvider;

class LaraPaymentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
            __DIR__.'/../config/lara_payments.php' => config_path('lara_payments.php')
        ], 'config');


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/routes.php';
        $this->app->make('Angryalf\LaraPayments\Controllers\LaraPaymentController');
    }
}
