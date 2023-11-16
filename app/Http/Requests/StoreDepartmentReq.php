<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentReq extends FormRequest
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
            'name' => "required|string|max:255|unique:departments,name",
            'status' => "required"
        ];
    }

    public function messages() {
        return [
            "name.required" => "Name is required",
            "name.string" => "Name must use alphabet character",
            "name.unique" => "This department is already exist",
            "name.max" => "Maximal Name is 255 characters",
            "status.required" => "Status is required"
        ];
    }
}
