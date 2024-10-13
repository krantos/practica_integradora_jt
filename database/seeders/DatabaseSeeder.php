<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Currency;
use App\Models\Location;
use App\Models\Offer;
use App\Models\Platform;
use App\Models\Technology;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Locale;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
				$user = User::factory()->create();
				$tid = $user->tenant_id;
				$location = Location::factory()->create(['tenant_id' => $tid]);
				$company = Company::factory()->create(['tenant_id' => $tid]);
				$platform = Platform::factory()->create(['tenant_id' => $tid]);

				$offers = Offer::factory()
					->count(10)
					->hasAttached(
						Technology::factory()->count(4),
						['tenant_id' => $tid]
					)
					->create([
						'tenant_id' => $tid,
						'company_id' => $company->id,
						'location_id' => $location->id,
						'platform_id' => $platform->id,
					]);
    }
}
