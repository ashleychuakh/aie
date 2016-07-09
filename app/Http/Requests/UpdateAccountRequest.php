<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateAccountRequest extends Request {

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
			'password' => 'confirmed',
			'type' => 'required',
			'address-name' => 'required',
			'address-phone' => 'required',
			'address-email' => 'required',
			'address' => 'required',
			'postalcode' => 'required',
			'buildingtype' => 'required',
		];
	}

}
