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
      Schema::table('interviews', function (Blueprint $table) {
        $table->dropForeign(['offer_id']);
        $table->foreign('offer_id')
        ->references('id')
        ->on('offers')
        ->nullable()
        ->nullOnDelete();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
