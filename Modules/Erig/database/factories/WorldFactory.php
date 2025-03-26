<?php

namespace Modules\Erig\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Erig\Models\World::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => \Modules\Erig\Models\Location::factory(),
            'pvp_type_id' => \Modules\Erig\Models\PVPType::factory(),
            'transfer_type_id' => \Modules\Erig\Models\TransferType::factory(),
            'game_world_type_id' => \Modules\Erig\Models\GameWorldType::factory(),

            'name' => fake()->unique()->city(),
            'premium_only' => fake()->boolean(),
            'battleye_protected' => fake()->boolean(),
            'battleye_date' => fake()->optional()->date(),
        ];
    }
}

