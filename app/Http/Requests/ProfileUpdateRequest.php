<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            // Es la URL del perfil público (/autores/{username}): minúsculas,
            // números y guiones, como un slug.
            'username' => [
                'sometimes',
                'required',
                'string',
                'min:3',
                'max:30',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                // El usuario que ya tiene un nombre reservado (la cuenta del
                // equipo) puede seguir guardando su perfil sin cambiarlo.
                Rule::notIn(array_values(array_diff(User::RESERVED_USERNAMES, [$this->user()->username]))),
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'bio' => ['sometimes', 'nullable', 'string', 'max:300'],
            'notify_by_email' => ['sometimes', 'boolean'],
            'newsletter_opt_in' => ['sometimes', 'boolean'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'username.regex' => 'Usa solo minúsculas, números y guiones (sin espacios ni tildes).',
            'username.not_in' => 'Ese nombre de usuario está reservado.',
        ];
    }
}
