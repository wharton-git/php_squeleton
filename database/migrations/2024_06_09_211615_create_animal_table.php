<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id_animal'); // Changed to increments('id')
            $table->unsignedBigInteger('owner_id')->nullable(); // Changed column name to owner_id to avoid conflict
            $table->string('nom', 20)->nullable();
            $table->string('espece', 20)->nullable();
            $table->string('race', 20)->nullable();
            $table->string('sexe', 10)->nullable();
            $table->date('date_naiss')->nullable();
            $table->date('date_enregist')->nullable();
            $table->date('date_vente')->nullable();
            $table->date('date_dece')->nullable();
            $table->integer('age')->nullable();
            $table->double('poids')->nullable();
            $table->string('status', 10)->nullable();
            $table->string('vaccin', 10)->nullable();
            $table->boolean('vermifuge')->nullable();
            $table->date('date_vacc')->nullable();
            $table->date('date_verm')->nullable();
            $table->string('maladie', 10)->nullable();
            $table->string('blessure', 10)->nullable();
            $table->date('date_trait')->nullable();
            $table->string('etat')->nullable();
            $table->boolean('gestation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('animal');
    }
};
