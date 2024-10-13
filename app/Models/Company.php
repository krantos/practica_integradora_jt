<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory, BelongsToTenant;

		public function offers(): HasMany {
			return $this->hasMany(Offer::class)->chaperone();
		}
}
