<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
            'enrollment' => ['required', 'min:10', 'max:10', Rule::unique('students')->ignore($this->student), 'regex:/^[A-Z0-9]+$/'],
            'name' => 'required|min:3|max:30|regex:/^[A-Za-záéíóúñÑ\s]+$/',
            'maternal_surname' => 'required|min:3|max:30|regex:/^[A-Za-záéíóúñÑ\s]+$/',
            'paternal_surname' => 'required|min:3|max:30|regex:/^[A-Za-záéíóúñÑ\s]+$/',
            'birth_date' => 'required|date|before:today',
            'email' => ['required', 'email', 'max:60', Rule::unique('students')->ignore($this->student)],
            'phone' => ['required', 'regex:/^\+?[0-9]{1,4}?[-.\s]?(\([0-9]{1,3}\)|[0-9]{1,3})[-.\s]?[0-9]{3,4}[-.\s]?[0-9]{4}$/'],
        ];
    }

    public function messages()
    {
        return [
            'enrollment.required' => 'Se requiere la matrícula del estudiante.',
            'enrollment.min' => 'La matrícula debe tener al menos 10 carácteres.',
            'enrollment.max' => 'La matrícula no puede tener más de 10 carácteres.',
            'enrollment.regex' => 'La matrícula solo puede contener letras y números.',
            'enrollment.unique' => 'La matrícula ya está registrada.',
            'name.required' => 'Se requiere el nombre del estudiante.',
            'name.min' => 'El nombre debe tener al menos 3 carácteres.',
            'name.max' => 'El nombre no puede tener más de 30 carácteres.',
            'name.regex' => 'El nombre solo puede contener letras y espacios.',
            'maternal_surname.required' => 'Se requiere el apellido materno del estudiante.',
            'maternal_surname.min' => 'El apellido materno debe tener al menos 3 carácteres.',
            'maternal_surname.max' => 'El apellido materno no puede tener más de 30 carácteres.',
            'maternal_surname.regex' => 'El apellido materno solo puede contener letras y espacios.',
            'paternal_surname.required' => 'Se requiere el apellido paterno del estudiante.',
            'paternal_surname.min' => 'El apellido paterno debe tener al menos 3 carácteres.',
            'paternal_surname.max' => 'El apellido paterno no puede tener más de 30 carácteres.',
            'paternal_surname.regex' => 'El apellido paterno solo puede contener letras y espacios.',
            'birth_date.required' => 'Se requiere la fecha de nacimiento del estudiante.',
            'birth_date.date' => 'La fecha de nacimiento no es válida.',
            'birth_date.before' => 'La fecha de nacimiento debe ser anterior a hoy.',
            'email.required' => 'Se requiere el correo electrónico del estudiante.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.max' => 'El correo electrónico no puede tener más de 60 carácteres.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'phone.required' => 'Se requiere el teléfono del estudiante.',
            'phone.regex' => 'El teléfono no es válido.',
        ];
    }
}
