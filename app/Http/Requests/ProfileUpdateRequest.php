<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'include_sleep_place' => isset($this->include_sleep_place),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:40'],
            'email' => ['nullable', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['nullable', 'string', 'max:20', Rule::unique(User::class)->ignore($this->user()->id)],
            'include_sleep_place' => ['nullable']
        ];
    }

    public function messages()
    {
        return [
            'name.max' => "Максимальна довжина ім'я 40 символів",
            'email.max' => "Максимальна довжина пошти 255 символів",
            'email.unique' => "Вибачте, дана пошта вже зайнята",
            'phone.unique' => "Вибачте, номер вже зайнятий",
            'email.email' => "Пошта неправильно введена",
        ];
    }
}
