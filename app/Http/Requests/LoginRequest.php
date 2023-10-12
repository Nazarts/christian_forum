<?php

namespace App\Http\Requests;

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
            'phone' => ['required', 'string', 'exists:users'],
            'password' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'phone.required' => "Номер телефону є обов'язковим",
            'password.required' => "Пароль є обов'язковим",
            'phone.exists' => "Користувач з данним номером телефону не знайдено. Спробуйте інший або зареєструйтесь",
        ];
    }
}
