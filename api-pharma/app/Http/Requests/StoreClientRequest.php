<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
            'identify' => 'required|max:15',
            'identify_type' => 'required|string|in:RUC,CI,PASSPORTE,VENTA A CONSUMIDOR FINAL,IDENTIFICACIÓN DELEXTERIOR',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'numeric|gt:0',
            'address' => 'required|string|max:255'
        ];
    }
}
