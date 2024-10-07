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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
						$table->string('position');
						$table->text('skills')->nullable();
						$table->text('experience')->nullable();
						$table->bigInteger('salary')->nullable();
						$table->dateTime('applied')->nullable();
						$table->string('status')->nullable();
						$table->text('url')->nullable();
						$table->date('publication_date')->nullable();
						$table->string('priority')->nullable();
						$table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
