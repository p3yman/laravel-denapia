<?php

namespace Peyman3d\Denapia\Http\Controllers\Auth;

use App\Http\Controllers\Auth\ForgotPasswordController as BaseForgotPasswordController;

class ForgotPasswordController extends BaseForgotPasswordController
{
	
	/**
	 * Display the form to request a password reset link.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showLinkRequestForm()
	{
		return view(config('denapia.auth.views').'.passwords.email');
	}
}
