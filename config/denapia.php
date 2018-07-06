<?php
return [

	/*-----------------------------------------------------------------
	- Admin panel base uri
	-----------------------------------------------------------------*/
	'uri' => 'admin',
	
	/*-----------------------------------------------------------------
	- Admin panel middleware
	-----------------------------------------------------------------*/
	'middleware' => ['admin', 'auth', 'web'],
	
	/*-----------------------------------------------------------------
	- Auth
	-----------------------------------------------------------------*/
	'auth' => [
		
		// View path
		'views' => 'denapia::auth',
		
		// Base uri
		'uri' => 'auth',
		
		// Namespace
		'namespace' => '\Peyman3d\Denapia\Http\Controllers\Auth',
		
		// Middleware
		'middleware' => 'web',
		
		// Redirects after register, login and reset_password
		'redirect_after' => [
			'register' => '/',
			'login' => '/',
			'reset_password' => '/',
		],
		
		// Fields
		'fields' => [
			
			// Login
			'login' => [
				'email' => [
					'type' => 'text',
					'label' => 'Email',
					'validation' => 'required|string|email'
				],
				'password' => [
					'type' => 'password',
					'label' => 'Password',
					'validation' => 'required|string'
				],
			],
			
			// Register
			'register' => [
				'name' => [
					'type' => 'text',
					'label' => 'Name',
					'validation' => 'required|string|max:255'
				],
				'email' => [
					'type' => 'email',
					'label' => 'Email',
					'validation' => 'nullable|string|email|max:255|unique:users'
				],
				'password' => [
					'type' => 'password',
					'label' => 'Password',
					'validation' => 'required|string|min:6|confirmed',
					'hash' => true,
				],
				'password_confirmation' => [
					'type' => 'password',
					'label' => 'Password Confirmation',
					'hide' => true,
				],
			],
		],
	
	
	]
	
];