<?php

namespace App\Providers;

use App\Repository\PropertyRepository;
use App\Repository\PropertyRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PropertyRepositoryInterface::class,PropertyRepository::class);
    }
}
