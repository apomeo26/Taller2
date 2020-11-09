<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionFormRequest extends FormRequest
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
            'titulo'=>'required',
            'cuerpo'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'titulo.required'=>'El titulo de la publicacion es un campo requerido',
            'cuerpo.required'=>'El cuerpo de la publicacion es un campo requerido',
        ];
    }
}
