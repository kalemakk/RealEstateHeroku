<?php

namespace App\Providers;

use App\Http\View\Composers\Locationcomposer;
use App\Http\View\Composers\Propertycomposer;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use phpDocumentor\Reflection\DocBlock\Tags\Property;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['home','admin.*','Property.*'],Propertycomposer::class);
        View::composer(['home','Property.*','partials.*',],Locationcomposer::class);

        //
    }
}
