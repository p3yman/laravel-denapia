<?php

namespace Peyman3d\Denapia\Providers;

use Illuminate\Support\ServiceProvider;

class DenapiaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    	// Load routes
	    $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
