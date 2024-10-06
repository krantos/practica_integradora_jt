<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

		public function offer() : BelongsTo {
			return $this->belongsTo(Offer::class);
		}
}
