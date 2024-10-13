<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
			Schema::table('offers', function (Blueprint $table) {
				$table->dropForeign(['platform_id']);
				$table->foreign('platform_id')
					->references('id')
					->on('platforms')
					->nullable()
					->nullOnDelete();

				$table->dropForeign(['location_id']);
				$table->foreign('location_id')
					->references('id')
					->on('locations')
					->nullable()
					->nullOnDelete();

				$table->dropForeign(['currency_id']);
				$table->foreign('currency_id')
					->references('id')
					->on('currencies')
					->nullable()
					->nullOnDelete();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            //
        });
    }
};
