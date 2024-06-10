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
        Schema::create('production', function (Blueprint $table) {
            $table->id('id_prod');
            $table->string('type_produit', 10)->nullable();
            $table->string('espece', 10)->nullable();
            $table->integer('mois')->nullable();
            $table->double('kpi')->nullable();
            $table->unsignedBigInteger('id_produit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('production');
    }
};
