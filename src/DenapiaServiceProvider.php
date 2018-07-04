<?php

namespace Peyman3d\Denapia;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DenapiaServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @param Router $router
	 *
	 * @return void
	 */
    public function boot(Router $router)
    {
	    
    	$this->registerRoutes();
    	$this->publishAssets();
    	$this->registerViews();
    	$this->registerMiddleware($router);
	    
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
			'as' => 'denapia.',
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
	
	/**
	 * Register assets for publish
	 */
	private function publishAssets() {
		
		$this->publishes([
			__DIR__.'/../public' => public_path('vendor/denapia'),
		], 'denapia-assets');
		
	}
	
	/**
	 * Register views
	 */
	private function registerViews() {
		
		$this->loadViewsFrom(__DIR__.'/../resources', 'denapia');
		
	}
	
	/**
	 * Register Admin Middleware
	 *
	 * @param $router
	 */
	public function registerMiddleware($router){
		$router->aliasMiddleware('admin', \Peyman3d\Denapia\Http\Middleware\DenapiaAdminMiddleware::class);
	}
}
