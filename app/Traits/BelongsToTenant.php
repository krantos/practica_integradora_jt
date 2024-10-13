<?php

namespace App\Traits;

use App\Models\Scopes\TenantScope;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToTenant {

	protected static function bootBelongsToTenant(): void {
		static::addGlobalScope(new TenantScope);

		static::creating(function($model) {
			if(session()->has('tenant_id')) {
				$model->tenant_id = session()->get('tenant_id');
			}
		});
	}

	public function tenant() : BelongsTo {
		return $this->belongsTo(Tenant::class);
	}
}
