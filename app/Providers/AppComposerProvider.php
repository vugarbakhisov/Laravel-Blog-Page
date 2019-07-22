<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppComposerProvider extends ServiceProvider
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
        $this->composeapp();
    }

    public function composeapp()
    {
       view()->composer('front.app','App\Http\Composers\AppComposer');
    }
}

