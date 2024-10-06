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
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
						$table->dateTime('date_time');
						$table->text('call_details');
						$table->unsignedBigInteger('offer_id');
						$table->foreign('offer_id')
							->references('id')
							->on('offers')
							->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
				Schema::table('interviews', function (Blueprint $table) {
					$table->dropForeign('interviews_offer_id_foreign');
				});
        Schema::dropIfExists('interviews');
    }
};
