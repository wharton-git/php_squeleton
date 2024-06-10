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
        Schema::create('animal', function (Blueprint $table) {
            $table->id('id_animal');
            $table->string('nom', 20);
            $table->string('espece', 20);
            $table->string('race', 20)->nullable();
            $table->string('sexe', 10);
            $table->date('date_naiss')->nullable();
            $table->date('date_enregist');
            $table->date('date_vente')->nullable();
            $table->date('date_dece')->nullable();
            $table->integer('age')->nullable();
            $table->double('poids');
            $table->string('status', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
