<?php

namespace App\Providers;

use App\Http\Repository\contracts\RepositoryInterface;
use App\Http\Repository\Eloquent\CustomerRepositoryEloquent;
use App\Http\Service\CustomerServiceInterface;
use App\Http\Service\Impl\CustomerService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CustomerServiceInterface::class,
            CustomerService::class
            );
        $this->app->singleton(RepositoryInterface::class,
            CustomerRepositoryEloquent::class
            );
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
