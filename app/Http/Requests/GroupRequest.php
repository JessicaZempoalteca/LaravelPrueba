<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:50|regex:/^[A-Za-záéíóúñÑ\s-]+$/',
            'semester' => 'required',
            'shift' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Se requiere el nombre del grupo.',
            'name.string' => 'El nombre del turno debe ser texto.',
            'name.min' => 'El nombre del turno debe tener al menos 3 carácteres.',
            'name.max' => 'El nombre del turno no puede tener más de 50 carácteres.',
            'name.regex' => 'El nombre del turno solo puede contener letras, espacios y guiones.',
            'semester.required' => 'Se requiere elegir un semestre.',
            'shift.required' => 'Se requiere elegir un turno.',
        ];

    }
}
