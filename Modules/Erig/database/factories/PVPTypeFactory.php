<?php

namespace Modules\Erig\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PVPTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Erig\Models\PVPType::class;

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
                    'hardcore pvp',
                    'open pvp',
                    'optional pvp',
                    'retro hardcore pvp',
                    'retro open pvp',
                ]),
            ];
        });
    }
}

