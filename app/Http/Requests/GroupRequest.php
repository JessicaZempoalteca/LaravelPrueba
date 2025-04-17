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
            'name' => 'required|string|max:50',
            'semester' => 'required',
            'shift' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Se requiere el nombre del grupo.',
            'name.string' => 'El nombre del turno debe ser texto.',
            'name.max' => 'El nombre del turno no puede tener más de 50 carácteres.',
            'semester.required' => 'Se requiere elegir un semestre.',
            'shift.required' => 'Se requiere elegir un turno.',
        ];

    }
}
