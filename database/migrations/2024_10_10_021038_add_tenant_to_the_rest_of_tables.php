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
        Schema::table('users', function (Blueprint $table) {
          $table->unsignedBigInteger('tenant_id')->nullable()->index();
        });
				
				Schema::table('offers', function (Blueprint $table) {
					$table->unsignedBigInteger('tenant_id')->nullable()->index();
				});
				
				Schema::table('locations', function (Blueprint $table) {
					$table->unsignedBigInteger('tenant_id')->nullable()->index();
				});
				
				Schema::table('companies', function (Blueprint $table) {
					$table->unsignedBigInteger('tenant_id')->nullable()->index();
				});

				Schema::table('platforms', function (Blueprint $table) {
					$table->unsignedBigInteger('tenant_id')->nullable()->index();
				});

				Schema::table('interviews', function (Blueprint $table) {
					$table->unsignedBigInteger('tenant_id')->nullable()->index();
				});

				Schema::table('offer_technology', function (Blueprint $table) {
					$table->unsignedBigInteger('tenant_id')->nullable()->index();
				});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
			// Schema::table('users', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');
			// });
			
			// Schema::table('offers', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');
			// });
			
			// Schema::table('locations', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');
			// });
			
			// Schema::table('companies', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');
			// });

			// Schema::table('platforms', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');
			// });

			// Schema::table('interviews', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');

			// });

			// Schema::table('offers_technologies', function (Blueprint $table) {
			// 	$table->dropIndex('tenant_id');
			// });
    }
};
