<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InterveiwFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
					'date_time' => fake()->dateTime(),
					'call_details' => fake()->text(),
					'offer_id' => Offer::factory(),
          'tenant_id' => Tenant::factory(),
        ];
    }
}
