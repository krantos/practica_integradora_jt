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
						$table->foreignId('location_id')->nullable()->constrained();
            $table->foreignId('currency_id')->nullable()->constrained();
						$table->foreignId('company_id')->nullable()->constrained();
						$table->foreignId('platform_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->dropForeign('offers_location_id_foreign');
            $table->dropForeign('offers_currency_id_foreign');
            $table->dropForeign('offers_company_id_foreign');
            $table->dropForeign('offers_platform_id_foreign');
        });
    }
};
