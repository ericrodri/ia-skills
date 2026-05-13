<?php

namespace Database\Factories;

use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Profession>
 */
class ProfessionFactory extends Factory
{
    protected $model = Profession::class;

    public function definition(): array
    {
        $name = fake()->unique()->word();

        return [
            'name'       => ucfirst($name),
            'slug'       => Str::slug($name),
            'icon'       => '🔧',
            'is_active'  => true,
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
