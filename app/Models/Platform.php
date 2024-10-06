<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

		public function offers(): HasMany {
			return $this->hasMany(Offer::class)->chaperone();
		}
}
