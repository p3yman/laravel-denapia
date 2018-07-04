<?php

namespace Peyman3d\Denapia;

use Illuminate\Support\Facades\Route;
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
	    
    	$this->registerRoutes();
    	$this->publishAssets();
	    
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    	
	    $this->registerConfig();
	    
    }
	
	/**
	 * Register routes
	 */
	protected function registerRoutes(){
		
		Route::group([
			'prefix' => config('denapia.uri', 'admin'),
			'namespace' => 'Peyman3d\Denapia\Http\Controllers',
			'middleware' => config('denapia.middleware', 'web'),
		], function () {
			$this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		});
    	
    }
	
	/**
	 * Register and publish configs
	 */
	private function registerConfig() {
		
		// Merge
		$this->mergeConfigFrom(
			__DIR__.'/../config/denapia.php', 'denapia'
		);
		
		// Publish
		$this->publishes([
			__DIR__.'/../config/denapia.php' => config_path('denapia.php'),
		], 'denapia-config');
		
	}
	
	private function publishAssets() {
		
		$this->publishes([
			__DIR__.'/../public' => public_path('vendor/denapia'),
		], 'denapia-assets');
		
	}
}
