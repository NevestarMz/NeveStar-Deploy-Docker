<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:12'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'O campo E-mail é obrigatório',
            'email.email' => 'Digite um E-mail é válido',
            'password.required' => 'A Senha é obrigatória',
            'password.min' => 'A Senha deve ter no minímo 6 caracteres',
            'password.max' => 'A Senha deve ter no máximo 12 caracteres',
        ];
    }
}
