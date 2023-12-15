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
            'pic_id' => 'nullable|integer',
            'pic_type' => 'required'
        ];

        return $rules;
    }

    public function messages(): array {
        return [
            'type.required' => "Type is required",
            'type.string' => "Type is must alphabet characters",
            'type.max' => "Maximal Type is 255 characters",
            'number_plates.required' => "Nomor Polisi is required",
            'number_plates.string' => "Nomor Polisi is must alphabet characters",
            'number_plates.max' => "Maximal Nomor Polisi is 255 characters",
            'number_plates.unique' => "This Nomor Polisi was already exist",
            'capacity.required' => "Capacity is required",
            'capacity.integer' => "Capacity is must number",
            'capacity.max' => "Maximal capacity is 10 characters",
        ];
    }
}
