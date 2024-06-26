<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'exists:users'],
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'email',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El :attribute es requerido',
            'email.email'    => 'El :attribute no es valido',
            'email.exists'   => 'El :attribute no existe en nuestros registros',
        ];
    }
}
