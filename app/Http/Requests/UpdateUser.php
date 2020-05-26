<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $user = $this->route('user');
        return [
            'nick' => [
                'sometimes',
                'regex:/^[_?A-Za-z][A-Za-z0-9]+$/i',
                Rule::unique('users')->ignore($user),
            ],
            'name' => 'sometimes',
            'last_name' => 'nullable',
            'email' => [
                'sometimes',
                'email',
                Rule::unique('users')->ignore($user),
            ],
            'password' => 'sometimes',
            'role_id' => 'sometimes|exists:roles,id',
        ];
    }
}
