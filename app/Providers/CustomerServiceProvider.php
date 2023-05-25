<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interface;
use App\Service;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if (request()->has('payment_method')) {
            $this->app->bind(CustomerInterface::class, CustomerImport::class, CustomerRetrieve::class);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
