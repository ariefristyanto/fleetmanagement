<?php namespace App\Http\Requests;


class UpdateUserRequest extends Request {

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
        $user_id = $this->users;

        return [
            'first_name'    => 'required',
            'timezone'    => 'required',
            'role_id'    => 'required',
            'locale'    => 'required',
            'email'    => 'required|email|unique:users,email,'.$user_id,
            'password' => 'confirmed',
        ];
    }

}
