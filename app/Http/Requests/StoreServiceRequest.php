<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine se o usuário está autorizado a fazer esta solicitação.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtém as regras de validação que se aplicam à solicitação.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'clientName' => 'required|string|max:255',
            'clientEmail' => 'required|email|max:255',
            'clientPhone' => 'required|string|regex:8^[2457][0-9]{7}$/',
            'couponCode' => 'nullable|string|max:255',
            'comment' => 'nullable|string',
            'serviceName' => 'required|string|max:255',
            'price' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'clientName.required' => "O campo nome é obrigatório!",
            'clientEmail.required' => 'O campo e-mail é obrigatório!',
            'clientEmail.email' => 'É Necessário enviar e-mail válido!',
            'clientPhone.regx' => 'O formato do número de telefone é inválido. Por favor, use o formato 8X XXX XXXX.',

        ];
    }
}
