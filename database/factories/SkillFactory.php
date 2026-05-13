<?php

namespace Database\Factories;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Skill>
 */
class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence(3);

        return [
            'profession_id'     => Profession::factory(),
            'user_id'           => User::factory(),
            'title'             => $title,
            'slug'              => Str::slug($title),
            'description'       => fake()->paragraph(),
            'prompt_content'    => fake()->paragraphs(2, true),
            'tool_name'         => fake()->randomElement(['Claude', 'ChatGPT', 'Gemini']),
            'difficulty'        => fake()->randomElement(['beginner', 'intermediate', 'advanced']),
            'estimated_minutes' => fake()->optional()->numberBetween(5, 60),
            'use_case'          => fake()->sentence(),
            'status'            => 'published',
            'resource_type'     => 'prompt',
            'vote_score'        => 0,
            'views_count'       => 0,
            'saves_count'       => 0,
            'version'           => 1,
        ];
    }
}
