<?php

namespace Peyman3d\Denapia\Http\Controllers\Auth;

use App\Http\Controllers\Auth\ResetPasswordController as BaseResetPasswordController;
use Illuminate\Http\Request;

class ResetPasswordController extends BaseResetPasswordController
{
	
	/**
	 * Where to redirect users after login.
	 */
	protected function redirectTo()
	{
		return config('denapia.auth.redirect_after.reset_password');
	}
	
	/**
	 * Display the password reset view for the given token.
	 *
	 * If no token is present, display the link request form.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param  string|null $token
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function showResetForm(Request $request, $token = null)
	{
		return view(config('denapia.auth.views').'.passwords.reset')->with(
			['token' => $token, 'email' => $request->email]
		);
	}
}
