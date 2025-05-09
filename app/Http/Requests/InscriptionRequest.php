<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
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
            'id_student' => 'required',
            'id_group' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_student.required' => 'Se requiere elegir un estudiante.',
            'id_group.required' => 'Se requiere elegir un grupo.',
        ];
    }
}
