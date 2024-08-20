<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class ForgottenPasswordRequest extends FormRequest
{

    public function authorize(): bool{
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return[
            'email' => 'required|min:3|max:128|email',
        ];
    }

    public function messages(): array
    {
        return[
            'email.email' => 'L\'adresse e-mail est invalide.',
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.min' => 'L\'adresse e-mail doit contenir au minimum 3 caractères.',
            'email.max' => 'L\'adresse e-mail doit contenir au maximum 128 caractères.',
        ];
    }
    /**
     * Create a new class instance.
     */
    
}
