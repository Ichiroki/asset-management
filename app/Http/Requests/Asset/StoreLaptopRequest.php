<?php

namespace App\Http\Requests\Asset;

use Illuminate\Foundation\Http\FormRequest;

class StoreLaptopRequest extends FormRequest
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
            'name' => 'required|string',
            'processor' => 'required|string',
            'ram' => 'required|string',
            'main_storage' => 'required|string',
            'extend_storage' => 'string|nullable',
            'vga' => 'string|nullable',
            'monitor' => 'string|nullable',
        ];
    }
}
