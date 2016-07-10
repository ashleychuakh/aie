<?php 

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SignupInfoAccountRequest extends Request {

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
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
			'email' => 'required|email|unique:accounts,email,'.auth()->user()->id,
			'phone' => 'required',
			'address' => 'required',
			'postalcode' => 'required',
			'type' => 'required',
			'buildingtype' => 'required',
		];
	}

}
