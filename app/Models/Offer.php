<?php

namespace App\Models;

use App\Enums\OfferState;
use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory, SoftDeletes, HasTimestamps, BelongsToTenant;

		 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
			'position',
			'publication_date',
			'skills',
			'experience',
			'salary',
      'state',
			'url',
			'company_id',
			'platform_id',
			'tenant_id'
		];

    protected $casts = [
      'state' => OfferState::class,
    ];

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
