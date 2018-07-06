<?php

namespace Peyman3d\Denapia\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Auth\RegisterController as BaseRegisterController;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseRegisterController
{
	/**
	 * Where to redirect users after login.
	 */
	protected function redirectTo()
	{
		return config('denapia.auth.redirect_after.register');
	}
	
	public function showRegistrationForm()
	{
		return view(config('denapia.auth.views').'.register');
	}

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    	$args = [];
	    foreach (config('denapia.auth.fields.register') as $field => $options){
		    if( array_get($options, 'validation')) {
			    $args[$field] = array_get($options, 'validation');
		    }
	    }
        return Validator::make($data, $args);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    	// set args to register
	    $args = [];
	    foreach (config('denapia.auth.fields.register') as $field => $options){
	    	if( array_has($data, $field) && !array_get($options, 'hide', false)) {
	    		
			    $args[$field] = array_get($data, $field);
			    
			    if(array_has($options, 'hash', false)){
				    $args[$field] = bcrypt($args[$field]);
			    }
			    
		    }
	    }
        $user = User::create($args);
	    
	    return $user;
    }
}
