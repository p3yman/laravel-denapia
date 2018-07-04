<?php

namespace Peyman3d\Denapia\Http\Middleware;

use Closure;

class DenapiaAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	
	    // Add assets
	    $this->registerAssets();
    	
        return $next($request);
    }
	
	/**
	 * Register admin panel assets
	 */
	private function registerAssets() {
		
		// CSS
		share()->css('font-montserrat')->link('https://fonts.googleapis.com/css?family=Montserrat:400,700,200');
		share()->css('font-awesome')->link('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
		share()->css('bootstrap')->link('vendor/denapia/lbd/css/bootstrap.min.css');
		share()->css('bootstrap')->link('vendor/denapia/lbd/css/light-bootstrap-dashboard.css');
		
		// JS
		share()->js('jquery')->link('vendor/denapia/lbd/js/core/jquery.3.2.1.min.js');
		share()->js('popper')->link('vendor/denapia/lbd/js/core/popper.min.js');
		share()->js('bootstrap-js')->link('vendor/denapia/lbd/js/core/bootstrap.min.js');
	
	}
}
