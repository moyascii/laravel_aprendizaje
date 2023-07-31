<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //Es falso si el usuario no es el indicado $this->user()->isAdmin()
//        return false;
        //Dejamos en true para que no necesite validación de usuario.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'El proyecto necesita un título'
        ];
    }
}
