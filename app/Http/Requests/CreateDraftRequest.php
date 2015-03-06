<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CreateDraftRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
     * User must be logged in
	 *
	 * @return bool
	 */
	public function authorize()
    {
        return Auth::check();
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
            'total_bid' => 'required|integer'
		];
	}

}
