<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Egulias\EmailValidator\Validation\Extra\SpoofCheckValidation;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:7128',
            'name' => 'nullable|string',
            'email' => 'nullable|string|email:rfc,dns',
            'password' => 'nullable|string|min:8',
            'confPassword' => 'nullable|string|same:password'
        ];
    }

    public function messages(): array
    {
        return [
            'avatar.image' => 'Avatar only received an image file',
            'avatar.mimes' => 'This file format is prohibited',
            'avatar.max' => 'Image size must below 7128 MB',
            'name.string' => 'Name must be string',
            'email.string' => 'Email Must be string',
            'email.email' => 'This email is not valid',
            'email.exists' => 'This email was already exist',
            'password.string' => 'Password must be string',
            'password.min' => 'Minimum for Password is 8 characters',
            'confPassword.string' => 'Confirmation Password must be string',
            'confPassword.same' => 'Confirmation Password must be the same as Password'
        ];
    }
}
