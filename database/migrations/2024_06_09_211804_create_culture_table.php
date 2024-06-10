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
        Schema::create('culture', function (Blueprint $table) {
            $table->id('id_culture');
            $table->unsignedBigInteger('code_parcelle')->nullable();
            $table->unsignedBigInteger('id_plante')->nullable();
            $table->date('date_plantation')->nullable();
            $table->date('date_production')->nullable();
            $table->date('date_recolte')->nullable();
            $table->double('produit_kg')->nullable();
            $table->double('nb_planter')->nullable();
            $table->double('surface_c')->nullable();
            $table->double('resultat_c')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('culture');
    }
};
