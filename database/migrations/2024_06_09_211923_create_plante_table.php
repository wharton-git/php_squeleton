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
        Schema::create('plante', function (Blueprint $table) {
            $table->id('id_plante');
            $table->string('type_plante', 20)->nullable();
            $table->string('variete', 20)->nullable();
            $table->string('description', 50)->nullable();
            $table->integer('nbr_plante')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plante');
    }
};
