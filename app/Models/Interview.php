<?php

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interview extends Model
{
    use HasFactory, SoftDeletes, BelongsToTenant;

    protected $fillable = [
      'call_details',
      'date_time',
      'offer_id'
    ];

		public function offer() : BelongsTo {
			return $this->belongsTo(Offer::class);
		}
}
