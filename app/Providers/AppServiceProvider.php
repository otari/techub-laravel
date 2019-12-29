<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\UserService;
use App\PaymentProviderContract;
use App\TbcPaymentProvider;
use App\BogPaymentProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserService::class, function ($app) {
            return new UserService(1);
        });

        $this->app->bind(PaymentProviderContract::class, function ($app) {

            $providers = [
                TbcPaymentProvider::class,
                BogPaymentProvider::class,
                TbcPaymentProvider::class,
                BogPaymentProvider::class,
                TbcPaymentProvider::class,
                BogPaymentProvider::class,
                TbcPaymentProvider::class,
                BogPaymentProvider::class,
            ];

            $providerIndex = rand(0, count($providers) -1);
            $class = $providers[$providerIndex];
            return new $class;
        });
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
