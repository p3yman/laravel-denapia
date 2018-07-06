<?php

namespace Peyman3d\Denapia\Http\Controllers\Auth;

use App\Http\Controllers\Auth\LoginController as BaseLoginController;
use Illuminate\Http\Request;

class LoginController extends BaseLoginController
{

    /**
     * Where to redirect users after login.
     */
	protected function redirectTo()
	{
		return config('denapia.auth.redirect_after.login');
	}
	
	public function showLoginForm()
	{
		return view(config('denapia.auth.views').'.login');
	}
	
	/**
	 * Get the login username to be used by the controller.
	 *
	 * @return string
	 */
	public function username()
	{
		return config('denapia.auth.username', 'email');
	}
	
	/**
	 * Validate the user login request.
	 *
	 * @param \Illuminate\Http\Request|Request $request
	 *
	 * @return void
	 */
	protected function validateLogin(Request $request)
	{
		$args = [];
		foreach (config('denapia.auth.fields.login') as $field => $options){
			if( array_get($options, 'validation')) {
				$args[$field] = array_get($options, 'validation');
			}
		}
		
		$this->validate($request, $args);
	}
}
