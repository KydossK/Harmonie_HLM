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
        Schema::create('partitions', function (Blueprint $table) {
            $table->id();
            $table->string('titre'); // Titre clair donné par le musicien
            $table->string('fichier'); // Nom du fichier stocké
            $table->unsignedBigInteger('user_id'); // Musicien qui upload
            $table->timestamps();
    
            // Clé étrangère vers la table des users (musiciens)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partitions');
    }
};
