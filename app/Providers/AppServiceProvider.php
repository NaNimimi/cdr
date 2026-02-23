<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryEloquent;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryEloquent;
use App\Repositories\OrderRepository;
use App\Repositories\OrderRepositoryEloquent;
use App\Repositories\OrderItemRepository;
use App\Repositories\OrderItemRepositoryEloquent;


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
    $this->app->bind(
        CategoryRepository::class, 
        CategoryRepositoryEloquent::class
    
    
    );

    $this->app->bind(
        OrderRepository::class,
        OrderRepositoryEloquent::class
    
    );


    $this->app->bind(
        OrderItemRepository::class, 
        OrderItemRepositoryEloquent::class


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
