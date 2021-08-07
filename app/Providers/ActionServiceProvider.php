<?php

namespace App\Providers;

use App\Actions\Product\CreatesNewProduct;
use App\Actions\Product\DeletesProduct;
use Illuminate\Support\ServiceProvider;
use App\Actions\Product\GetsAllProduct;
use App\Actions\Product\ShowsProduct;
use App\Actions\Product\UpdatesProduct;
use App\Contracts\ProductInterface;
use App\Http\Controllers\ProductController;

class ActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(ProductInterface::class, GetsAllProduct::class);
        $this->app->when(ProductController::class)
          ->needs(ProductInterface::class)
          ->give([
              GetsAllProduct::class,
              CreatesNewProduct::class,
              ShowsProduct::class,
              DeletesProduct::class,
              UpdatesProduct::class,
          ]);
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
