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
        Schema::create('sante', function (Blueprint $table) {
            $table->id('id_sante');
            $table->unsignedBigInteger('id_animal')->nullable();
            $table->string('vaccin', 100)->nullable();
            $table->boolean('vermifuge')->nullable();
            $table->date('date_vacc')->nullable();
            $table->date('date_verm')->nullable();
            $table->string('maladie', 100)->nullable();
            $table->string('blessure', 100)->nullable();
            $table->date('date_trait')->nullable();
            $table->integer('etat')->nullable();
            $table->boolean('gestation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sante');
    }
};
