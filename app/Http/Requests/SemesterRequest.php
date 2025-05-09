<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SemesterRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:30',
            'number' => 'required|integer|min:1|max:20',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Se requiere el nombre del semestre.',
            'name.string' => 'El nombre del turno debe ser texto.',
            'name.max' => 'El nombre del semestre no puede tener más de 30 carácteres.',
            'number.required' => 'Se requiere el número del semestre.',
            'number.integer' => 'El número del semestre debe ser un número entero.',
            'number.min' => 'El número del semestre debe ser al menos 1.',
            'number.max' => 'El número del semestre no puede ser mayor a 20.',

        ];

    }
}
