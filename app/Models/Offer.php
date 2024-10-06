<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;


class Offer extends Model
{
    use HasFactory;

		public function location(): HasOne {
			return $this->hasOne(Location::class);
		}

		public function company(): BelongsTo {
			return $this->belongsTo(Company::class);
		}

		public function platform(): BelongsTo {
			return $this->belongsTo(Platform::class);
		}

		public function currency(): HasOne {
			return $this->hasOne(Currency::class);
		}

		public function interviews(): HasMany {
			return $this->hasMany(Interview::class)->chaperone();
		}

		public function technologies(): BelongsToMany {
			return $this->belongsToMany(Technology::class);
		}
}
