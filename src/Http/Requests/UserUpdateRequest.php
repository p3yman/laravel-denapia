<?php

namespace Peyman3d\Denapia\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserUpdateRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @param Request $request
	 *
	 * @return array
	 */
	public function rules(Request $request)
	{
		return [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users,email,'.$request->segment(3),
			'password' => 'nullable|min:6|confirmed',
		];
	}
}
