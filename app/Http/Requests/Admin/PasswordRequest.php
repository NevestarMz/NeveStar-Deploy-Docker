<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'current_pwd' => ['required', 'string', 'min:6'],
            'new_pwd' => ['required', 'string', 'min:6', 'different:current_pwd'],
            'confirm_pwd' => ['required', 'string', 'same:new_pwd']
        ];
    }

    public function messages()
    {
        return [
            'current_pwd.required' => 'A palavra-passe atual é obrigatória',
            'current_pwd.min' => 'A palavra-passe deve ter no minímo 6 caracteres',
            'new_pwd.required' => 'A nova palavra-passe é obrigatória!',
            'new_pwd.min' => 'A nova palavra-passe deve ter no minímo 6 caracteres',
            'new_pwd.different' => 'A nova palavra-passe deve ser da atual!',
            'confirm_pwd.required' => 'A confirmação da palavra-passe é obrigatória!',
            'confirm_pwd.same' => 'A palavra-passe confirmada deve ser igual a nova',
        ];
    }
}
