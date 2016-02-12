<?php namespace App\Http\Requests;



class CreateUserRequest extends Request {

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
            'first_name'    => 'required',
            'timezone'    => 'required',
            'role_id'    => 'required',
            'locale'    => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }

}
