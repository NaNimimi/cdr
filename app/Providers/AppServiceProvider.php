<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryEloquent;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
{
    $this->app->bind(
        ProductRepository::class,
        ProductRepositoryEloquent::class
    );
}
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
