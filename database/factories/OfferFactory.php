<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Currency;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
			$tenant = Tenant::factory();
        return [
					'position' => fake()->sentence(),
					'skills' => fake()->text(),
					'experience' => fake()->text(),
					'salary' => fake()->numberBetween(65000, 180000),
					'url' => fake()->url(),
					'publication_date' => fake()->date(),
					'priority' => fake()->word(),
					'currency_id' => Currency::factory(),
					// 'location_id' => Location::factory(),
					// 'company_id' => Company::factory(),
					// 'platform_id' => Platform::factory(),
          'tenant_id' => Tenant::factory(),
        ];
    }
}
