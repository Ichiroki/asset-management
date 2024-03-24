<?php

namespace App\Http\Requests\Asset\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
        $rules = [
            'type' => 'required|string|max:255',
            'number_plates' => 'required|string|max:255|unique:vehicles,number_plates',
            'capacity' => 'required|integer|between:1,20',
            'status' => 'required|string'
        ];

        return $rules;
    }

    public function messages(): array {
        return [
            'type.required' => "Type is required",
            'type.string' => "Type is must alphabet characters",
            'type.max' => "Maximal character for Type is 255 characters",
            'number_plates.required' => "Number Plates is required",
            'number_plates.string' => "Number Plates is must alphabet characters",
            'number_plates.max' => "Maximal Number Plates is 255 characters",
            'number_plates.unique' => "This Number Plates was already exist",
            'capacity.required' => "Capacity is required",
            'capacity.integer' => "Capacity is must number",
            'capacity.max' => "Maximal capacity is 10 characters",
            'status.required' => "Status is required",
            'status.string' => 'Status is must alphabet characters'
        ];
    }
}
