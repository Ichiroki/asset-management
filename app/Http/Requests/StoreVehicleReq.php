<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    // $table->string('jenis');
    // $table->string('nomorPol');
    // $table->integer('capacity');
    // $table->string('pic');

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'jenis' => 'required|max:255|string',
            'nomorPol' => 'required|max:10|string',
            'capacity' => 'required|integer|max:4',
        ];
    }

    public function messages(): array
    {
        return [
            'jenis.required' => "Jenis is required",
            'jenis.max' => "Maximum character for Jenis is 255",
            'jenis.string' => "Jenis only support alphabet characters",
            'nomorPol.required' => "Nomor Polisi only support alphabet characters",
            'nomorPol.max' => "Maximum character for Nomor Polisi is 10",
            'nomorPol.string' => "Nomor Polisi only support alphabet characters",
            'capacity.required' => "Capacity is required",
            'capacity.integer' => "Capacity only support numeric characters",
            'capacity.max' => "Maximum character for Nomor Polisi is 4 digits",
        ];
    }
}
