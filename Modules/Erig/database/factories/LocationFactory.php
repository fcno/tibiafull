<?php

namespace Modules\Erig\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Erig\Models\Location::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->city(),
        ];
    }

    public function real(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => Arr::random([
                    'europe',
                    'north america',
                    'oceania',
                    'south america',
                ]),
            ];
        });
    }
}

