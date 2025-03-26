<?php

namespace Modules\Erig\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class GameWorldTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Erig\Models\GameWorldType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
        ];
    }

    public function real(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => Arr::random([
                    'experimental',
                    'regular',
                    'tournament',
                ]),
            ];
        });
    }
}

