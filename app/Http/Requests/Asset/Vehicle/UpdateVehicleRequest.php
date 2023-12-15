<?php

namespace App\Http\Requests\Asset\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            'type' => 'string|max:255',
            'number_plates' => 'string|max:255',
            'capacity' => 'integer|between:1,20',
            'pic' => 'exists:vehicles,pic'
        ];
    }

    public function messages(): array {
        return [
            'type.string' => "Type is must alphabet characters",
            'type.max' => "Maximal Type is 255 characters",
            'number_plates.string' => "Nomor Polisi is must alphabet characters",
            'number_plates.max' => "Maximal Nomor Polisi is 255 characters",
            'capacity.required' => "Capacity is required",
            'capacity.integer' => "Capacity is must number",
            'capacity.between' => "Allowed number for capacity between 1 - 20",
            'capacity.max' => "Maximal capacity is 10 characters",
        ];
    }
}
