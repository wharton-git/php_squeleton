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
        Schema::create('parcelle', function (Blueprint $table) {
            $table->id('code_parcelle');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('surface');
            $table->string('type_sol', 20)->nullable();
            $table->string('type_culture_avant', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcelle');
    }
};
