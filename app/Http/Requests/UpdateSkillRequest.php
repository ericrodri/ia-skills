<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSkillRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->can('update', $this->route('skill')) ?? false;
    }

    /**
     * Mismas reglas que al crear, más el changelog opcional.
     * El slug no se puede cambiar: las URLs publicadas deben seguir resolviendo.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'profession_id'     => ['required', 'exists:professions,id'],
            'title'             => ['required', 'string', 'max:200'],
            'description'       => ['required', 'string', 'max:1000'],
            'prompt_content'    => ['required', 'string'],
            'tool_name'         => ['required', 'string', 'max:100'],
            'difficulty'        => ['required', 'in:beginner,intermediate,advanced'],
            'estimated_minutes' => ['nullable', 'integer', 'min:1', 'max:480'],
            'use_case'          => ['nullable', 'string', 'max:500'],
            'resource_type'     => ['nullable', 'in:prompt,claude_skill,claude_plugin'],
            'changelog'         => ['nullable', 'string', 'max:500'],
        ];
    }
}
