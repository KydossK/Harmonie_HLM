<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('musiciens', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->date('date_anniversaire')->nullable();
            $table->string('adresse')->nullable();
            $table->string('email')->unique();
            $table->string('telephone')->nullable();
            $table->boolean('instrument_prete')->default(false);
            $table->string('pupitre')->nullable();
            $table->string('libelle_instrument')->nullable();
            $table->string('role')->default('musicien'); // ou 'admin'
            $table->string('mot_de_passe'); // utile si on ne veut pas lier avec users
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musiciens');
    }
};
