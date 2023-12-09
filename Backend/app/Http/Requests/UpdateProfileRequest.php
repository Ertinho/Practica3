<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            //
            'name' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'city' => ['required'],
            'country' => ['required'],
            'summary' => ['required'],


            'frameworks' => ['sometimes', 'array'],
            'frameworks.*.id' => ['required_with:frameworks'],
            'frameworks.*.name' => ['required_with:frameworks'],
            'frameworks.*.level' => ['required_with:frameworks'],
            'frameworks.*.year' => ['required_with:frameworks', 'integer', 'between:1900,'.date('Y')],

            'hobbies' => ['sometimes', 'array'],
            'hobbies.*.id' => ['required_with:hobbies'],
            'hobbies.*.name' => ['required_with:hobbies'],
            'hobbies.*.description' => ['required_with:hobbies'],

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */
    public function messages(): array
    {
        return [
            //
            'name.required' => 'El nombre es requerido.',
            'lastname.required' => 'El apellido es requerido.',
            'email.required' => 'El correo electrónico es requerido.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'city.required' => 'La ciudad es requerida.',
            'country.required' => 'El país es requerido.',
            'summary.required' => 'El resumen es requerido.',
            'frameworks.*.name.required_with' => 'El nombre del framework es requerido.',
            'frameworks.*.level.required_with' => 'El nivel del framework es requerido.',
            'frameworks.*.year.required_with' => 'El año del framework es requerido.',
            'hobbies.*.name.required_with' => 'El nombre del hobby es requerido.',
            'hobbies.*.description.required_with' => 'La descripción del hobby es requerida.',
        ];
    }
}
