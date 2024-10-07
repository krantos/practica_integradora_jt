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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
						$table->string('name');
						$table->text('url')->nullable();
						$table->unsignedBigInteger('location_id')->nullable();
						$table->foreign('location_id')->references('id')->on('locations')->nullable();
						$table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
				Schema::table('companies', function (Blueprint $table) {
					$table->dropForeign('companies_location_id_foreign');
				});
        Schema::dropIfExists('companies');
    }
};
