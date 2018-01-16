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
        //
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
